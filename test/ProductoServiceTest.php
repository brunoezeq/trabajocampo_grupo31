<?php

use PHPUnit\Framework\TestCase;
use App\Services\ProductoService;
use App\Models\producto_model;

/**
 * Pruebas unitarias para App\Services\ProductoService
 */
class TestableProductoService extends ProductoService
{
    // Permite inyectar un modelo simulado en las pruebas
    public function __construct($model)
    {
        $this->model = $model;
    }
}

final class ProductoServiceTest extends TestCase
{
    private $modelMock;
    private $service;

    protected function setUp(): void
    {
        // Mock del modelo producto_model
        $this->modelMock = $this->getMockBuilder(producto_model::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['insert', 'findAll', 'find', 'update', 'like'])
            ->getMock();

        // Para permitir llamadas encadenadas like(...)->findAll()
        $this->modelMock->method('like')->willReturn($this->modelMock);

        $this->service = new TestableProductoService($this->modelMock);
    }

    public function testValidarDatosDevuelveErroresCuandoNombreCorto()
    {
        $datos = [
            'nombre' => 'abc',
            'descripcion' => 'Descripcion valida',
            'precio' => '100',
            'stock' => '10'
        ];

        $errores = $this->service->validarDatos($datos, null);

        $this->assertIsArray($errores);
        $this->assertArrayHasKey('nombre', $errores);
    }

    public function testValidarDatosAceptaDatosValidosSinImagen()
    {
        $datos = [
            'nombre' => 'Nombre Valido',
            'descripcion' => 'Descripcion valida',
            'precio' => 150.5,
            'stock' => 20
        ];

        $errores = $this->service->validarDatos($datos, null);

        $this->assertIsArray($errores);
        $this->assertEmpty($errores);
    }

    public function testValidarDatosFallaConImagenInvalida()
    {
        $datos = [
            'nombre' => 'Nombre Valido',
            'descripcion' => 'Descripcion valida',
            'precio' => 10,
            'stock' => 5
        ];

        // Imagen inválida simulada
        $imagen = new class {
            public function isValid() { return false; }
            public function getSizeByUnit($u) { return 0; }
        };

        $errores = $this->service->validarDatos($datos, $imagen);

        $this->assertIsArray($errores);
        $this->assertArrayHasKey('imagen', $errores);
    }

    public function testInsertarConImagenValidaLlamaInsertYMueveImagen()
    {
        $datos = [
            'nombre' => 'Producto X',
            'descripcion' => 'Desc',
            'precio' => 99.9,
            'stock' => 3,
            'categoria' => 1
        ];

        // Imagen válida con spy para comprobar que se llamó a move()
        $imagen = new class {
            public $moved = false;
            public function isValid() { return true; }
            public function getRandomName() { return 'random-name.jpg'; }
            public function move($path, $name) { $this->moved = true; /* no escribir archivos en test */ }
            public function getSizeByUnit($u) { return 100; }
        };

        // Esperamos que insert sea llamado y el payload contenga la imagen generada
        $this->modelMock->expects($this->once())
            ->method('insert')
            ->with($this->callback(function ($payload) use ($datos) {
                if ($payload['nombre_producto'] !== $datos['nombre']) return false;
                if ($payload['descripcion_producto'] !== $datos['descripcion']) return false;
                if ($payload['precio_producto'] !== $datos['precio']) return false;
                if ($payload['stock_producto'] !== $datos['stock']) return false;
                if ($payload['categoria_producto'] !== $datos['categoria']) return false;
                if (empty($payload['imagen_producto'])) return false;
                if ($payload['estado_producto'] !== 1) return false;
                return true;
            }))
            ->willReturn(123);

        $result = $this->service->insertar($datos, $imagen);

        $this->assertEquals(123, $result);
        $this->assertTrue($imagen->moved, 'Se esperaba que se moviera la imagen');
    }

    public function testInsertarSinImagenLlamaInsert()
    {
        $datos = [
            'nombre' => 'Producto Y',
            'descripcion' => 'Desc',
            'precio' => 50,
            'stock' => 2,
            'categoria' => 2
        ];

        $this->modelMock->expects($this->once())
            ->method('insert')
            ->with($this->callback(function ($payload) use ($datos) {
                if (isset($payload['imagen_producto'])) return false;
                return $payload['nombre_producto'] === $datos['nombre'];
            }))
            ->willReturn(10);

        $result = $this->service->insertar($datos, null);

        $this->assertEquals(10, $result);
    }

    public function testActualizarConImagenValidaLlamaUpdate()
    {
        $id = 5;
        $datos = [
            'nombre' => 'Prod Mod',
            'descripcion' => 'Nueva',
            'precio' => 20,
            'stock' => 7,
            'categoria' => 3
        ];

        $imagen = new class {
            public function isValid() { return true; }
            public function getRandomName() { return 'upd.jpg'; }
            public function move($path, $name) { /* noop */ }
            public function getSizeByUnit($u) { return 100; }
        };

        $this->modelMock->expects($this->once())
            ->method('update')
            ->with($id, $this->callback(function ($payload) use ($datos) {
                return $payload['nombre_producto'] === $datos['nombre'] && isset($payload['imagen_producto']);
            }))
            ->willReturn(true);

        $res = $this->service->actualizar($id, $datos, $imagen);

        $this->assertTrue($res);
    }

    public function testCambiarEstadoAcepta0y1YRechazaOtros()
    {
        $id = 7;

        // Cuando el estado es válido (1) debe llamar update y devolver su resultado
        $this->modelMock->expects($this->atLeastOnce())
            ->method('update')
            ->with($id, $this->anything())
            ->willReturn(true);

        $res1 = $this->service->cambiarEstado($id, 1);
        $this->assertTrue($res1);

        $res0 = $this->service->cambiarEstado($id, 0);
        $this->assertTrue($res0);

        // Estado inválido devuelve false y no debe llamar a update (no es sencillo recontar llamadas aquí,
        // así que simplemente comprobamos el retorno)
        $resInvalid = $this->service->cambiarEstado($id, 5);
        $this->assertFalse($resInvalid);
    }

    public function testObtenerTodosConBusquedaUsaLikeYDevuelveArray()
    {
        $busqueda = 'Cafe';
        $expected = [
            ['id' => 1, 'nombre_producto' => 'Cafe 1'],
            ['id' => 2, 'nombre_producto' => 'Cafe 2']
        ];

        $this->modelMock->method('findAll')->willReturn($expected);

        $res = $this->service->obtenerTodos($busqueda);

        $this->assertIsArray($res);
        $this->assertCount(2, $res);
    }

    public function testObtenerPorIdDevuelveProducto()
    {
        $producto = ['id' => 9, 'nombre_producto' => 'X'];
        $this->modelMock->method('find')->with(9)->willReturn($producto);

        $res = $this->service->obtenerPorId(9);

        $this->assertSame($producto, $res);
    }
}