<?php

use PHPUnit\Framework\TestCase;
use App\Models\Usuario_model;
use App\Services\DomicilioService;
use App\Services\UbicacionService;
use App\Services\UsuarioService;

/**
 * Pruebas unitarias para App\Services\UsuarioService
 */
class TestableUsuarioService extends UsuarioService
{
    // Permite inyectar dependencias en las pruebas
    public function __construct($usuarioModel, $domicilioService, $ubicacionService)
    {
        $this->usuarioModel = $usuarioModel;
        $this->domicilioService = $domicilioService;
        $this->ubicacionService = $ubicacionService;
    }
}

final class UsuarioServiceTest extends TestCase
{
    private $usuarioModelMock;
    private $domicilioServiceMock;
    private $ubicacionServiceMock;
    private $service;

    protected function setUp(): void
    {
        // Mock del modelo Usuario_model
        $this->usuarioModelMock = $this->getMockBuilder(Usuario_model::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['where', 'first', 'insert'])
            ->getMock();

        // Hacemos que where devuelva siempre el mock para permitir la cadena where(...)->first()
        $this->usuarioModelMock->method('where')->willReturn($this->usuarioModelMock);

        // Mock del servicio de domicilio
        $this->domicilioServiceMock = $this->getMockBuilder(DomicilioService::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['validarDatosDomicilio', 'guardar'])
            ->getMock();

        // Mock del servicio de ubicaciones
        $this->ubicacionServiceMock = $this->getMockBuilder(UbicacionService::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['existeLocalidad', 'obtenerTodasLasProvincias', 'obtenerLocalidadesPorProvincia'])
            ->getMock();

        $this->service = new TestableUsuarioService(
            $this->usuarioModelMock,
            $this->domicilioServiceMock,
            $this->ubicacionServiceMock
        );
    }

    public function testValidarDatosRegistroDevuelveErroresCuandoFaltanCamposIdentidad()
    {
        // Datos incompletos: faltan nombre/apellido/dni/celular
        $datos = [
            'usuario' => 'pepito',
            'contraseña' => 'secreto',
            'confirmar_contraseña' => 'secreto',
        ];

        // Validamos que no exista duplicado para dni/celular/usuario
        $this->usuarioModelMock->method('first')->willReturn(null);

        // Domicilio válido (sin errores)
        $this->domicilioServiceMock->method('validarDatosDomicilio')->willReturn([]);

        // Localidad existe
        $this->ubicacionServiceMock->method('existeLocalidad')->willReturn(true);

        $errores = $this->service->validarDatosRegistro($datos);

        $this->assertIsArray($errores);
        $this->assertNotEmpty($errores, 'Se esperan errores cuando faltan campos de identidad y contacto');
        $this->assertStringContainsString('Todos los campos de identidad y contacto son obligatorios', implode(' | ', $errores));
    }

    public function testValidarDatosSesionFallaConCredencialesInvalidas()
    {
        $datos = ['usuario' => 'no_existe', 'contraseña' => 'pwd'];

        // Simular que no se encuentra el usuario
        $this->usuarioModelMock->method('first')->willReturn(null);

        $errores = $this->service->validarDatosSesion($datos);

        $this->assertIsArray($errores);
        $this->assertNotEmpty($errores, 'Se espera error cuando el usuario no existe');
        $this->assertStringContainsString('El usuario ingresado no existe o la contraseña es incorrecta', implode(' | ', $errores));
    }

    public function testValidarDatosSesionAceptaCredencialesCorrectas()
    {
        $password = 'mi_pass';
        $hash = password_hash($password, PASSWORD_BCRYPT);

        $usuario = [
            'id_usuario' => 1,
            'usuario' => 'juan',
            'contraseña_usuario' => $hash,
            'estado_usuario' => 1,
            'perfil_id' => 2
        ];

        // El primer->first devolverá los datos de usuario
        $this->usuarioModelMock->method('first')->willReturn($usuario);

        $errores = $this->service->validarDatosSesion(['usuario' => 'juan', 'contraseña' => $password]);

        $this->assertIsArray($errores);
        $this->assertEmpty($errores, 'No se deben devolver errores para credenciales válidas y cuenta activa');
    }

    public function testCrearUsuarioGuardaDomicilioEInsertaUsuario()
    {
        $datos = [
            'nombre' => 'Ana',
            'apellido' => 'Pérez',
            'dni' => '12345678',
            'celular' => '541112345678',
            'localidad_id' => 1,
            'usuario' => 'ana123',
            'contraseña' => 'clave123',
            'confirmar_contraseña' => 'clave123',
            'calle' => 'Falsa',
            'numero' => '123'
        ];

        // Domicilio guardado devuelve un id
        $this->domicilioServiceMock->expects($this->once())
            ->method('guardar')
            ->with($this->equalTo($datos))
            ->willReturn(55);

        // Insert debe ser llamado una vez; verificamos el payload insertado
        $this->usuarioModelMock->expects($this->once())
            ->method('insert')
            ->with($this->callback(function ($payload) use ($datos) {
                // Verificar campos obligatorios
                if ($payload['nombre_usuario'] !== $datos['nombre']) return false;
                if ($payload['apellido_usuario'] !== $datos['apellido']) return false;
                if ($payload['dni'] !== $datos['dni']) return false;
                if ($payload['celular'] !== $datos['celular']) return false;
                if ($payload['domicilio_id'] !== 55) return false;
                if ($payload['usuario'] !== $datos['usuario']) return false;
                if ($payload['perfil_id'] !== 2) return false;
                if ($payload['estado_usuario'] !== 1) return false;
                // Verificar que la contraseña almacenada es un hash válido de la original
                if (!password_verify($datos['contraseña'], $payload['contraseña_usuario'])) return false;
                return true;
            }));

        $this->service->crearUsuario($datos);
        // Si las expectativas se cumplen, la prueba pasa
        $this->assertTrue(true);
    }
}