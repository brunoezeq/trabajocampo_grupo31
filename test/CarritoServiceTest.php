<?php

use PHPUnit\Framework\TestCase;
use App\Services\CarritoService;
use App\Interfaces\CarritoInterface;

/**
 * Pruebas unitarias para App\Services\CarritoService::agregarProducto, validarProducto y verificarStock
 */
final class CarritoServiceTest extends TestCase
{
    private static int $runSeed;

    public static function setUpBeforeClass(): void
    {
        // Prioriza la variable de entorno TEST_RUN_SEED si está presente (setiada por el script de ejecución)
        $env = getenv('TEST_RUN_SEED');
        if ($env !== false) {
            self::$runSeed = (int) $env;
        } else {
            self::$runSeed = (int) (microtime(true) * 1000) % 1000000;
        }
    }

    private static function runId(int $offset = 0): int
    {
        return self::$runSeed + $offset;
    }

    private static function runName(int $id): string
    {
        return 'Producto_' . $id;
    }

    private static function runPrice(int $id): float
    {
        return round(1.0 + ($id % 97) / 10, 2);
    }

    public function testAgregarProductoLlamaAdapterAgregar()
    {
        // Mock del adaptador del carrito
        $adapterMock = $this->getMockBuilder(CarritoInterface::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['agregar', 'obtenerContenido', 'eliminar', 'vaciar'])
            ->getMock();

        // Valores dependientes del seed de ejecución
        $pid = self::runId(101);
        $pname = self::runName($pid);
        $pprice = self::runPrice($pid);

        // Esperamos que se llame agregar con id, nombre, precio y cantidad 1
        $adapterMock->expects($this->once())
            ->method('agregar')
            ->with(
                $this->equalTo($pid),
                $this->equalTo($pname),
                $this->equalTo($pprice),
                $this->equalTo(1)
            );

        $service = new CarritoService($adapterMock);

        $producto = [
            'id_producto'    => $pid,
            'nombre_producto'=> $pname,
            'precio_producto'=> $pprice,
            'stock_producto' => 10,
            'estado_producto'=> 1
        ];

        $service->agregarProducto($producto);
    }

    public function testValidarProductoConProductoNuloDevuelveMensaje()
    {
        $adapterMock = $this->getMockBuilder(CarritoInterface::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['obtenerContenido', 'agregar', 'eliminar', 'vaciar'])
            ->getMock();

        $service = new CarritoService($adapterMock);

        $msg = $service->validarProducto(null);

        $this->assertEquals('El producto no existe.', $msg);
    }

    public function testValidarProductoProductoInactivoDevuelveMensaje()
    {
        $adapterMock = $this->getMockBuilder(CarritoInterface::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['obtenerContenido', 'agregar', 'eliminar', 'vaciar'])
            ->getMock();

        $service = new CarritoService($adapterMock);

        $pid = self::runId(2);
        $producto = [
            'id_producto' => $pid,
            'nombre_producto' => self::runName($pid) . '_Inactivo',
            'precio_producto' => self::runPrice($pid),
            'stock_producto' => 5,
            'estado_producto' => 0
        ];

        $msg = $service->validarProducto($producto);

        $this->assertEquals('El producto está inactivo.', $msg);
    }

    public function testVerificarStockInsuficienteDevuelveMensaje()
    {
        $adapterMock = $this->getMockBuilder(CarritoInterface::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['obtenerContenido', 'agregar', 'eliminar', 'vaciar'])
            ->getMock();

        $pid = self::runId(404);
        $existingQty = 3;

        // Simulamos que en el carrito ya hay qty = $existingQty del producto $pid
        $adapterMock->method('obtenerContenido')
            ->willReturn([
                ['id' => $pid, 'qty' => $existingQty]
            ]);

        $service = new CarritoService($adapterMock);

        $producto = [
            'id_producto' => $pid,
            'nombre_producto' => self::runName($pid),
            'precio_producto' => self::runPrice($pid),
            'stock_producto' => $existingQty, // stock igual a qty en carrito -> insuficiente
            'estado_producto' => 1
        ];

        $msg = $service->verificarStock($producto);

        $this->assertEquals('No hay suficiente stock disponible.', $msg);
    }

    public function testVerificarStockSuficienteDevuelveNull()
    {
        $adapterMock = $this->getMockBuilder(CarritoInterface::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['obtenerContenido', 'agregar', 'eliminar', 'vaciar'])
            ->getMock();

        $pid = self::runId(505);
        $existingQty = 1;

        // En carrito hay qty = $existingQty del producto $pid
        $adapterMock->method('obtenerContenido')
            ->willReturn([
                ['id' => $pid, 'qty' => $existingQty]
            ]);

        $service = new CarritoService($adapterMock);

        $producto = [
            'id_producto' => $pid,
            'nombre_producto' => self::runName($pid),
            'precio_producto' => self::runPrice($pid),
            'stock_producto' => 10, // stock mayor que qty en carrito -> suficiente
            'estado_producto' => 1
        ];

        $msg = $service->verificarStock($producto);

        $this->assertNull($msg);
    }
}