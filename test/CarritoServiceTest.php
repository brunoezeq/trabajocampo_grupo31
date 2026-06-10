<?php

use PHPUnit\Framework\TestCase;
use App\Services\CarritoService;
use App\Interfaces\CarritoInterface;

/**
 * Pruebas unitarias para App\Services\CarritoService::agregarProducto, validarProducto y verificarStock
 */
final class CarritoServiceTest extends TestCase
{
    public function testAgregarProductoLlamaAdapterAgregar()
    {
        // Mock del adaptador del carrito
        $adapterMock = $this->getMockBuilder(CarritoInterface::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['agregar', 'obtenerContenido', 'eliminar', 'vaciar'])
            ->getMock();

        // Esperamos que se llame agregar con id, nombre, precio y cantidad 1
        $adapterMock->expects($this->once())
            ->method('agregar')
            ->with(
                $this->equalTo(101),
                $this->equalTo('Producto Test'),
                $this->equalTo(12.5),
                $this->equalTo(1)
            );

        $service = new CarritoService($adapterMock);

        $producto = [
            'id_producto'    => 101,
            'nombre_producto'=> 'Producto Test',
            'precio_producto'=> 12.5,
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

        $producto = [
            'id_producto' => 2,
            'nombre_producto' => 'Inactivo',
            'precio_producto' => 5.0,
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

        // Simulamos que en el carrito ya hay qty = 2 del producto 101
        $adapterMock->method('obtenerContenido')
            ->willReturn([
                ['id' => 101, 'qty' => 2]
            ]);

        $service = new CarritoService($adapterMock);

        $producto = [
            'id_producto' => 101,
            'nombre_producto' => 'Producto Test',
            'precio_producto' => 12.5,
            'stock_producto' => 2, // stock igual a qty en carrito -> insuficiente
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

        // En carrito hay qty = 1 del producto 101
        $adapterMock->method('obtenerContenido')
            ->willReturn([
                ['id' => 101, 'qty' => 1]
            ]);

        $service = new CarritoService($adapterMock);

        $producto = [
            'id_producto' => 101,
            'nombre_producto' => 'Producto Test',
            'precio_producto' => 12.5,
            'stock_producto' => 5, // stock mayor que qty en carrito -> suficiente
            'estado_producto' => 1
        ];

        $msg = $service->verificarStock($producto);

        $this->assertNull($msg);
    }
}