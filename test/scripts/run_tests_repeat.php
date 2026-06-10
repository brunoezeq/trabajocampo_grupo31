<?php
// Script para ejecutar tests seleccionados varias veces y registrar resultados en una tabla Markdown.
// Ahora evita usar el comando "php" sin ruta en Windows; usa PHP_BINARY o la ruta de XAMPP.
//
// Uso: php run_tests_repeat.php [iteraciones]
// Ejemplo: php run_tests_repeat.php 20

$iterations = $argv[1] ?? 10;
$iterations = max(1, intval($iterations));

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
//  - en Windows preferimos el .bat (si existe).
//  - si existe el script *nix (vendor/bin/phpunit) lo llamamos con el mismo PHP que ejecuta este script (PHP_BINARY).
//  - si no se encuentra nada, usamos PHP_BINARY o la ruta de XAMPP como ejecutable y apuntamos al posible path de phpunit.
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

        // Añadir bloque plegable con la salida completa (formato seguro en Markdown)
        $detailHeader = sprintf("\n<details>\n<summary>Detalle de salida (%s) - %d ms</summary>\n\n", $filter, $duration);
        $detailBody = "```text\n" . $output . "\n```\n\n";
        $detailClose = "</details>\n\n";

        file_put_contents($resultsPath, $detailHeader . $detailBody . $detailClose, FILE_APPEND);

        // Limpiar salida para la siguiente ejecución
        $outputLines = [];
    }
}

echo "Ejecuciones completadas: {$iterations}. Resultado guardado en {$resultsPath}\n";