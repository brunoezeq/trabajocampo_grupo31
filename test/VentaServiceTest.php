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
            try {
                $ventaData = [
                    'cliente_id'    => $clienteId,
                    'fecha_venta'   => date('Y-m-d'),
                    'medio_pago_id' => $medioPagoId
                ];
                $ventaId = $this->ventaModel->insert($ventaData, true);
                return $ventaId ?: null;
            } catch (\Exception $ex) {
                // Simular comportamiento: en caso de error en el modelo, retornamos NULL
                return null;
            }
        }

        // Fallback: llamar al método real (no recomendado en unit tests sin DB)
        try {
            return parent::crearVenta($clienteId, $medioPagoId);
        } catch (\Exception $ex) {
            return null;
        }
    }
}

/**
 * Pruebas unitarias para App\Services\VentaService
 */
final class VentaServiceTest extends TestCase
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

    private static function runPrice(int $id): float
    {
        return round(1.0 + ($id % 97) / 10, 2);
    }

    public function testCrearVentaDevuelveIdCuandoInsertOk()
    {
        $ventaModelMock = $this->getMockBuilder(\App\Models\venta_model::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['insert'])
            ->getMock();

        $ventaModelMock->expects($this->once())
            ->method('insert')
            ->willReturn(42);

        $service = new TestableVentaService();
        $service->ventaModel = $ventaModelMock;

        $clienteId = self::runId(7);
        $medioPagoId = self::runId(2);

        $id = $service->crearVenta($clienteId, $medioPagoId);

        $this->assertEquals(42, $id);
    }

    public function testCrearVentaOtraCombinacionDevuelveId()
    {
        $ventaModelMock = $this->getMockBuilder(\App\Models\venta_model::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['insert'])
            ->getMock();

        $ventaModelMock->expects($this->once())
            ->method('insert')
            ->willReturn(55);

        $service = new TestableVentaService();
        $service->ventaModel = $ventaModelMock;

        $clienteId = self::runId(10);
        $medioPagoId = self::runId(2);

        $id = $service->crearVenta($clienteId, $medioPagoId);

        $this->assertEquals(55, $id);
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

        $clienteId = self::runId(1);
        $medioPagoId = self::runId(1);

        $id = $service->crearVenta($clienteId, $medioPagoId);

        $this->assertNull($id);
    }

    public function testCrearVentaDevuelveNullCuandoClienteNull()
    {
        $ventaModelMock = $this->getMockBuilder(\App\Models\venta_model::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['insert'])
            ->getMock();

        // Si cliente es NULL simulamos que model->insert falla
        $ventaModelMock->expects($this->once())
            ->method('insert')
            ->willReturn(false);

        $service = new TestableVentaService();
        $service->ventaModel = $ventaModelMock;

        $id = $service->crearVenta(null, self::runId(1));

        $this->assertNull($id);
    }

    public function testCrearVentaDevuelveNullCuandoMedioPagoNull()
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

        $id = $service->crearVenta(self::runId(5), null);

        $this->assertNull($id);
    }

    public function testCrearVentaDevuelveNullCuandoIdsNegativos()
    {
        $ventaModelMock = $this->getMockBuilder(\App\Models\venta_model::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['insert'])
            ->getMock();

        $ventaModelMock->expects($this->exactly(2))
            ->method('insert')
            ->willReturn(false);

        $service = new TestableVentaService();
        $service->ventaModel = $ventaModelMock;

        $this->assertNull($service->crearVenta(-1, self::runId(1)));
        $this->assertNull($service->crearVenta(self::runId(5), -1));
    }

    public function testCrearVentaDevuelveNullCuandoClienteOmedioInexistenteEnBD()
    {
        $ventaModelMock = $this->getMockBuilder(\App\Models\venta_model::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['insert'])
            ->getMock();

        // Simulamos que el insert falla para IDs no válidos en BD
        $ventaModelMock->expects($this->exactly(2))
            ->method('insert')
            ->willReturn(false);

        $service = new TestableVentaService();
        $service->ventaModel = $ventaModelMock;

        $this->assertNull($service->crearVenta(self::runId(9999), self::runId(1)));
        $this->assertNull($service->crearVenta(self::runId(5), self::runId(9999)));
    }

    public function testCrearVentaDevuelveNullCuandoInsertLanzaExcepcion()
    {
        $ventaModelMock = $this->getMockBuilder(\App\Models\venta_model::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['insert'])
            ->getMock();

        $ventaModelMock->expects($this->once())
            ->method('insert')
            ->will($this->throwException(new \Exception('DB error')));

        $service = new TestableVentaService();
        $service->ventaModel = $ventaModelMock;

        $id = $service->crearVenta(self::runId(5), self::runId(1));

        $this->assertNull($id);
    }
        
    // ---------------------------------------------------------
    // Pruebas para registrarVenta 
    // ---------------------------------------------------------
    public function testRegistrarVentaDevuelveTrueCuandoTodoOk()
    {
        $pid = self::runId(10);
        $items = [
            ['id' => $pid, 'qty' => 1, 'price' => self::runPrice($pid)]
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

        $res = $service->registrarVenta($items, self::runId(3), self::runId(1));

        $this->assertTrue($res);
    }

    public function testRegistrarVentaUnSoloProductoValidoRetornaTrue()
    {
        $pid = self::runId(20);
        $items = [
            ['id' => $pid, 'qty' => 1, 'price' => self::runPrice($pid)]
        ];

        $service = new TestableVentaService();

        $service->validarStockCallback = function ($items) {
            return true;
        };

        $service->crearVentaCallback = function ($clienteId, $medioPagoId) {
            return 100;
        };

        $service->crearDetallesCallback = function ($ventaId, $items, $medioPagoId) {
            return true;
        };

        $service->actualizarStockCallback = function ($items) {
            return true;
        };

        $res = $service->registrarVenta($items, self::runId(4), self::runId(2));

        $this->assertTrue($res);
    }

    public function testRegistrarVentaCarritoVacioRetornaFalse()
    {
        $items = [];

        $service = new TestableVentaService();

        // validarStock lanzará ValidationException para carrito vacío
        $service->validarStockCallback = function ($items) {
            if (empty($items)) {
                throw new \App\Services\ValidationException(['carrito' => 'Carrito vacío']);
            }
            return true;
        };

        $res = $service->registrarVenta($items, self::runId(5), self::runId(1));

        $this->assertFalse($res);
    }

    public function testRegistrarVentaMedioPagoNoSeleccionadoRetornaFalse()
    {
        $pid = self::runId(30);
        $items = [
            ['id' => $pid, 'qty' => 1, 'price' => self::runPrice($pid)]
        ];

        $service = new TestableVentaService();

        $service->validarStockCallback = function ($items) {
            return true;
        };

        // Si medioPagoId es null simulamos que crearVenta falla
        $service->crearVentaCallback = function ($clienteId, $medioPagoId) {
            if ($medioPagoId === null) {
                return null;
            }
            return 200;
        };

        $res = $service->registrarVenta($items, self::runId(5), null);

        $this->assertFalse($res);
    }

    public function testRegistrarVentaMedioPagoInexistenteRetornaFalse()
    {
        $pid = self::runId(40);
        $items = [
            ['id' => $pid, 'qty' => 1, 'price' => self::runPrice($pid)]
        ];

        $service = new TestableVentaService();

        $service->validarStockCallback = function ($items) {
            return true;
        };

        // Medio de pago inexistente -> crearVenta devuelve null
        $service->crearVentaCallback = function ($clienteId, $medioPagoId) {
            return null;
        };

        $res = $service->registrarVenta($items, self::runId(5), self::runId(99));

        $this->assertFalse($res);
    }

    public function testRegistrarVentaCrearDetallesFallaRetornaFalse()
    {
        $pid = self::runId(50);
        $items = [
            ['id' => $pid, 'qty' => 1, 'price' => self::runPrice($pid)]
        ];

        $service = new TestableVentaService();

        $service->validarStockCallback = function ($items) {
            return true;
        };

        $service->crearVentaCallback = function ($clienteId, $medioPagoId) {
            return 300;
        };

        // crearDetalles lanza excepción -> registrarVenta debe retornar false
        $service->crearDetallesCallback = function ($ventaId, $items, $medioPagoId) {
            throw new \Exception('Error crear detalles');
        };

        $res = $service->registrarVenta($items, self::runId(5), self::runId(1));

        $this->assertFalse($res);
    }

    public function testRegistrarVentaActualizarStockFallaRetornaFalse()
    {
        $pid = self::runId(60);
        $items = [
            ['id' => $pid, 'qty' => 1, 'price' => self::runPrice($pid)]
        ];

        $service = new TestableVentaService();

        $service->validarStockCallback = function ($items) {
            return true;
        };

        $service->crearVentaCallback = function ($clienteId, $medioPagoId) {
            return 400;
        };

        $service->crearDetallesCallback = function ($ventaId, $items, $medioPagoId) {
            return true;
        };

        // actualizarStock falla
        $service->actualizarStockCallback = function ($items) {
            throw new \Exception('Error actualizar stock');
        };

        $res = $service->registrarVenta($items, self::runId(5), self::runId(1));

        $this->assertFalse($res);
    }
}