<?php

use PHPUnit\Framework\TestCase;
use App\Services\CarritoService;
use App\Interfaces\CarritoInterface;

/**
 * Pruebas unitarias para App\Services\CarritoService::agregarProducto
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
}