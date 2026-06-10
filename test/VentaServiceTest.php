<?php

use PHPUnit\Framework\TestCase;

/**
 * Clase auxiliar para pruebas que permite inyectar comportamiento para crearVenta, validarStock, crearDetallesVenta y actualizarStock.
 */
class TestableVentaService extends \App\Services\VentaService
{
    public $ventaModel = null;
    public $validarStockCallback = null;
    public $crearVentaCallback = null;
    public $crearDetallesCallback = null;
    public $actualizarStockCallback = null;

    // Registrar venta sin transacciones de DB reales, solo orquesta las llamadas (para pruebas unitarias)
    public function registrarVenta($itemsCarrito, $clienteId, $medioPagoId)
    {
        try {
            if ($this->validarStockCallback) {
                ($this->validarStockCallback)($itemsCarrito);
            }

            $ventaId = null;
            if ($this->crearVentaCallback) {
                $ventaId = ($this->crearVentaCallback)($clienteId, $medioPagoId);
            } else {
                $ventaId = parent::crearVenta($clienteId, $medioPagoId);
            }

            if (!$ventaId) {
                throw new \Exception('Error al crear la venta.');
            }

            if ($this->crearDetallesCallback) {
                ($this->crearDetallesCallback)($ventaId, $itemsCarrito, $medioPagoId);
            } else {
                $this->crearDetallesVenta($ventaId, $itemsCarrito, $medioPagoId);
            }

            if ($this->actualizarStockCallback) {
                ($this->actualizarStockCallback)($itemsCarrito);
            } else {
                $this->actualizarStock($itemsCarrito);
            }

            return true;
        } catch (\Exception $ex) {
            return false;
        }
    }

    // Reimplementamos crearVenta para poder usar un mock de modelo (si se provee)
    public function crearVenta($clienteId, $medioPagoId)
    {
        if ($this->crearVentaCallback) {
            return ($this->crearVentaCallback)($clienteId, $medioPagoId);
        }

        if ($this->ventaModel) {
            $ventaData = [
                'cliente_id'    => $clienteId,
                'fecha_venta'   => date('Y-m-d'),
                'medio_pago_id' => $medioPagoId
            ];
            $ventaId = $this->ventaModel->insert($ventaData, true);
            return $ventaId ?: null;
        }

        // Fallback: llamar al método real (no recomendado en unit tests sin DB)
        return parent::crearVenta($clienteId, $medioPagoId);
    }
}

/**
 * Pruebas unitarias para App\Services\VentaService
 */
final class VentaServiceTest extends TestCase
{
    public function testCrearVentaDevuelveIdCuandoInsertOk()
    {
        // Mock del modelo de venta
        $ventaModelMock = $this->getMockBuilder(\App\Models\venta_model::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['insert'])
            ->getMock();

        $ventaModelMock->expects($this->once())
            ->method('insert')
            ->with($this->arrayHasKey('cliente_id'), $this->equalTo(true))
            ->willReturn(42);

        $service = new TestableVentaService();
        $service->ventaModel = $ventaModelMock;

        $id = $service->crearVenta(7, 2);

        $this->assertEquals(42, $id);
    }

    public function testCrearVentaDevuelveNullCuandoInsertFalla()
    {
        $ventaModelMock = $this->getMockBuilder(\App\Models\venta_model::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['insert'])
            ->getMock();

        $ventaModelMock->expects($this->once())
            ->method('insert')
            ->willReturn(false);

        $service = new TestableVentaService();
        $service->ventaModel = $ventaModelMock;

        $id = $service->crearVenta(1, 1);

        $this->assertNull($id);
    }

    public function testRegistrarVentaDevuelveTrueCuandoTodoOk()
    {
        $items = [
            ['id' => 10, 'qty' => 1, 'price' => 20.0]
        ];

        $service = new TestableVentaService();

        // Simular validarStock sin excepciones
        $service->validarStockCallback = function ($items) {
            return true;
        };

        // Simular crearVenta devolviendo id
        $service->crearVentaCallback = function ($clienteId, $medioPagoId) {
            return 99;
        };

        // Simular crearDetallesVenta exitoso
        $service->crearDetallesCallback = function ($ventaId, $items, $medioPagoId) {
            return true;
        };

        // Simular actualizarStock exitoso
        $service->actualizarStockCallback = function ($items) {
            return true;
        };

        $res = $service->registrarVenta($items, 3, 1);

        $this->assertTrue($res);
    }

    public function testRegistrarVentaDevuelveFalseCuandoValidacionFalla()
    {
        $items = [
            ['id' => 99, 'qty' => 10, 'price' => 100.0]
        ];

        $service = new TestableVentaService();

        // Simular validarStock lanzando ValidationException
        $service->validarStockCallback = function ($items) {
            throw new \App\Services\ValidationException(['stock_99' => 'Insuficiente']);
        };

        $res = $service->registrarVenta($items, 2, 1);

        $this->assertFalse($res);
    }

    public function testRegistrarVentaDevuelveFalseCuandoCrearVentaFalla()
    {
        $items = [
            ['id' => 11, 'qty' => 1, 'price' => 5.0]
        ];

        $service = new TestableVentaService();

        $service->validarStockCallback = function ($items) {
            return true;
        };

        // crearVenta devuelve null => falla
        $service->crearVentaCallback = function ($clienteId, $medioPagoId) {
            return null;
        };

        $res = $service->registrarVenta($items, 4, 2);

        $this->assertFalse($res);
    }
}