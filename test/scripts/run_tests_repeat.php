<?php
// Script para ejecutar tests seleccionados varias veces y registrar resultados en una tabla Markdown.
// Ejecuta exactamente 20 iteraciones y escribe la salida completa en el archivo results.md.
//
# Uso: php run_tests_repeat.php
# Nota: Las iteraciones están fijadas en 20 por diseño.

$iterations = 20; // fijado a 20 repeticiones

$tests = [
    [
        'filter' => 'CarritoServiceTest::testAgregarProductoLlamaAdapterAgregar',
        'args'   => "['id_producto'=>101,'nombre_producto'=>'Producto Test','precio_producto'=>12.5]",
        'desc'   => 'agregarProducto llama al adaptador con id, nombre, precio y qty=1',
        'expected' => 'adapter->agregar llamado con (101, "Producto Test", 12.5, 1)'
    ],
    [
        'filter' => 'VentaServiceTest::testCrearVentaDevuelveIdCuandoInsertOk',
        'args'   => 'clienteId=7, medioPagoId=2',
        'desc'   => 'crearVenta retorna id cuando insert del modelo devuelve id',
        'expected' => 'retorna id (int)'
    ],
    [
        'filter' => 'VentaServiceTest::testCrearVentaDevuelveNullCuandoInsertFalla',
        'args'   => 'clienteId=1, medioPagoId=1',
        'desc'   => 'crearVenta retorna null cuando insert falla',
        'expected' => 'retorna null'
    ],
    [
        'filter' => 'VentaServiceTest::testRegistrarVentaDevuelveTrueCuandoTodoOk',
        'args'   => 'items=[{id:10,qty:1,price:20}], clienteId=3, medioPagoId=1',
        'desc'   => 'registrarVenta retorna true cuando validarStock, crearVenta, crearDetalles y actualizarStock OK',
        'expected' => 'true'
    ],
    [
        'filter' => 'VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoValidacionFalla',
        'args'   => 'items con stock insuficiente',
        'desc'   => 'registrarVenta retorna false cuando validarStock lanza ValidationException',
        'expected' => 'false'
    ],
    [
        'filter' => 'VentaServiceTest::testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla',
        'args'   => 'crearVenta devuelve null',
        'desc'   => 'registrarVenta retorna false si crearVenta falla',
        'expected' => 'false'
    ],
];

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

        // Ejecutar phpunit con --filter y capturar salida completa
        $cmd = sprintf('%s --colors=never --filter %s 2>&1', $phpunitCmd, escapeshellarg($filter));
        $start = microtime(true);
        exec($cmd, $outputLines, $exitCode);
        $duration = round((microtime(true) - $start) * 1000); // ms

        // Unir la salida en una sola cadena
        $output = implode(PHP_EOL, $outputLines);
        if ($output === '') {
            $output = "(sin salida)";
        }

        // Determinar resultado simple
        $result = $exitCode === 0 ? 'OK' : 'FAIL';

        // Línea de tabla
        $line = sprintf("| %d | %s | %s | %s | %s | %s |\n",
            $i,
            $filter,
            $t['args'],
            $t['desc'],
            $t['expected'],
            $result
        );
        file_put_contents($resultsPath, $line, FILE_APPEND);

        // Añadir bloque con la salida completa (SIN <details>, solo texto)
        $detailHeader = sprintf("\n**Salida completa (%s) - %d ms**\n\n", $filter, $duration);
        $detailBody = "```text\n" . $output . "\n```\n\n";

        file_put_contents($resultsPath, $detailHeader . $detailBody, FILE_APPEND);

        // Limpiar salida para la siguiente ejecución
        $outputLines = [];
    }
}

echo "Ejecuciones completadas: {$iterations}. Resultado guardado en {$resultsPath}\n";