<?php
// Script para ejecutar tests seleccionados varias veces y registrar resultados en una tabla Markdown.
// Ejecuta exactamente 20 iteraciones y escribe SOLO las filas relevantes en results.md (sin la salida completa).
//
# Uso: php run_tests_repeat.php
# Nota: Las iteraciones están fijadas en 20 por diseño.

$iterations = 20; // fijado a 20 repeticiones

$tests = [
    [
        'filter' => 'CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar',
        'args'   => "id_producto=?, nombre_producto=?, precio_producto=?",
        'desc'   => 'agregarProducto llama al adaptador con id, nombre, precio y qty=1',
        'expected' => 'adapter->agregar llamado con (id, nombre, precio, 1)'
    ],
    [
        'filter' => 'VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk',
        'args'   => 'clienteId=?, medioPagoId=?',
        'desc'   => 'crearVenta retorna id cuando insert del modelo devuelve id',
        'expected' => 'retorna id (int)'
    ],
    [
        'filter' => 'VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla',
        'args'   => 'clienteId=?, medioPagoId=?',
        'desc'   => 'crearVenta retorna null cuando insert falla',
        'expected' => 'retorna null'
    ],
    [
        'filter' => 'VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk',
        'args'   => 'items=[{id:?,qty:1,price:?}], clienteId=?, medioPagoId=?',
        'desc'   => 'registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK',
        'expected' => 'true'
    ],
    [
        'filter' => 'VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla',
        'args'   => 'items=[], clienteId=?, medioPagoId=?',
        'desc'   => 'registrarVenta retorna false cuando validarStock lanza ValidationException (carrito vacío)',
        'expected' => 'false'
    ],
    [
        'filter' => 'VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla',
        'args'   => 'crearVenta devuelve null (medioPago simulado)',
        'desc'   => 'registrarVenta retorna false si crearVenta falla',
        'expected' => 'false'
    ],
];

// helpers para derivar valores igual que en los tests
function runId(int $seed, int $offset = 0): int {
    return $seed + $offset;
}
function runPrice(int $id): float {
    return round(1.0 + ($id % 97) / 10, 2);
}
function runName(int $id): string {
    return 'Producto_' . $id;
}
// normaliza medioPagoId al rango 1..5
function medioPagoForSeed(int $seed, int $offset = 0): int {
    $raw = runId($seed, $offset);
    return ($raw % 5) + 1;
}
function computeArgs(string $filter, int $seed): string {
    switch ($filter) {
        case 'CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar':
            $id = runId($seed, 101);
            $name = runName($id);
            $price = runPrice($id);
            return "id_producto={$id}, nombre_producto={$name}, precio_producto={$price}";
        case 'VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk':
            $cliente = runId($seed, 7);
            $medio = medioPagoForSeed($seed, 2);
            return "clienteId={$cliente}, medioPagoId={$medio}";
        case 'VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla':
            $cliente = runId($seed, 1);
            $medio = medioPagoForSeed($seed, 1);
            return "clienteId={$cliente}, medioPagoId={$medio}";
        case 'VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk':
            $itemId = runId($seed, 10);
            $price = runPrice($itemId);
            $cliente = runId($seed, 3);
            $medio = medioPagoForSeed($seed, 1);
            return "items=[{id:{$itemId},qty:1,price:{$price}}], clienteId={$cliente}, medioPagoId={$medio}";
        case 'VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla':
            $cliente = runId($seed, 5);
            $medio = medioPagoForSeed($seed, 1);
            return "items=[], clienteId={$cliente}, medioPagoId={$medio}";
        case 'VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla':
            $itemId = runId($seed, 40);
            $price = runPrice($itemId);
            $cliente = runId($seed, 5);
            $medioInvalido = medioPagoForSeed($seed, 99); // seguirá en 1..5 aunque sea "invalido" para la prueba
            return "items=[{id:{$itemId},qty:1,price:{$price}}], clienteId={$cliente}, medioPagoId={$medioInvalido}";
        default:
            return "";
    }
}

// Cabecera de la tabla Markdown
$header = "| iteración | test | argumentos | descripcion de la prueba | resultado esperado | resultado real |\n";
$header .= "|---:|---|---|---|---|---|\n";

$resultsPath = __DIR__ . '/../results.md';
file_put_contents($resultsPath, "# Resultados de ejecuciones repetidas\n\n");
file_put_contents($resultsPath, $header, FILE_APPEND);

// Detección robusta de phpunit para Windows y Unix
$vendorPhpUnit = __DIR__ . '/../../vendor/bin/phpunit';
$vendorPhpUnitBat = __DIR__ . '/../../vendor/bin/phpunit.bat';

// Construir comando seguro para invocar phpunit:
if (file_exists($vendorPhpUnitBat)) {
    $phpunitCmd = escapeshellarg($vendorPhpUnitBat);
} elseif (file_exists($vendorPhpUnit)) {
    $phpExec = defined('PHP_BINARY') ? PHP_BINARY : 'C:\\xampp\\php\\php.exe';
    $phpunitCmd = escapeshellcmd($phpExec) . ' ' . escapeshellarg($vendorPhpUnit);
} else {
    $phpExec = defined('PHP_BINARY') ? PHP_BINARY : 'C:\\xampp\\php\\php.exe';
    $phpunitPath = __DIR__ . '/../../vendor/bin/phpunit';
    $phpunitCmd = escapeshellcmd($phpExec) . ' ' . escapeshellarg($phpunitPath);
}

for ($i = 1; $i <= $iterations; $i++) {
    foreach ($tests as $t) {
        $filter = $t['filter'];

        // Generar seed consistente para esta ejecución y propagarla a phpunit mediante variable de entorno
        $seed = (int) (microtime(true) * 1000) % 1000000;
        putenv("TEST_RUN_SEED={$seed}");

        // Ejecutar phpunit con --filter y capturar salida completa (pero NO la guardaremos en results.md)
        $cmd = sprintf('%s --colors=never --filter %s 2>&1', $phpunitCmd, escapeshellarg($filter));
        $start = microtime(true);
        exec($cmd, $outputLines, $exitCode);
        $duration = round((microtime(true) - $start) * 1000); // ms

        // Determinar resultado simple
        $result = $exitCode === 0 ? 'OK' : 'FAIL';

        // Calcular argumentos reales usados basados en el seed (sin mostrar seed)
        $argsReal = computeArgs($filter, $seed);

        // Línea de tabla (solo las columnas requeridas)
        $line = sprintf("| %d | %s | %s | %s | %s | %s |\n",
            $i,
            $filter,
            $argsReal,
            $t['desc'],
            $t['expected'],
            $result
        );
        file_put_contents($resultsPath, $line, FILE_APPEND);

        // Limpiar salida para la siguiente ejecución
        $outputLines = [];
    }
}

echo "Ejecuciones completadas: {$iterations}. Resultado guardado en {$resultsPath}\n";