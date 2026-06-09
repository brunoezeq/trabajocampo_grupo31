<?php

namespace App\Services;

use App\Models\Usuario_model;
use App\Services\DomicilioService;
use App\Services\UbicacionService;
use App\Services\ServiceContainer;

class UsuarioService
{
    protected $usuarioModel;
    protected $domicilioService;
    protected $ubicacionService;

    public function __construct()
    {
        $this->usuarioModel = new Usuario_model();

        // Obtener instancias desde el ServiceContainer (singletons)
        $container = ServiceContainer::getInstancia();
        $this->domicilioService = $container->get(DomicilioService::class);
        $this->ubicacionService = $container->get(UbicacionService::class);
    }

    public function validarDatosRegistro(array $data): array
    {
        $errores = [];

        // Validación de nombre, apellido, DNI y celular
        if (empty($data['nombre']) || empty($data['apellido']) || empty($data['dni']) || empty($data['celular'])) {
            $errores[] = 'Todos los campos de identidad y contacto son obligatorios';
        }

        if (!empty($data['dni'])) {
            if (!is_numeric($data['dni']) || strlen($data['dni']) < 7 || strlen($data['dni']) > 9) {
                $errores[] = 'El DNI debe tener entre 7 y 9 números';
            } else {
                if ($this->usuarioModel->where('dni', $data['dni'])->first()) {
                    $errores[] = 'El DNI ingresado ya se encuentra registrado en el sistema';
                }
            }
        }

        if (!empty($data['celular']) && (!is_numeric($data['celular']) || strlen($data['celular']) < 10 || strlen($data['celular']) > 15)) {
            $errores[] = 'El celular debe ser un número válido (entre 10 y 15 dígitos)';
        }

        if ($this->usuarioModel->where('celular', $data['celular'])->first()) {
            $errores[] = 'Este número de celular ya está siendo utilizado por otra cuenta';
        }

        // Validación de domicilio (debe devolver array o null)
        $erroresDomicilio = $this->domicilioService->validarDatosDomicilio($data);
        $errores = array_merge($errores, $erroresDomicilio);

        // Validación de localidad
        if (!empty($data['localidad_id']) && !$this->ubicacionService->existeLocalidad((int)$data['localidad_id'])) {
            $errores[] = 'La localidad seleccionada no existe en nuestro sistema';
        }

        // Validación de usuario y contraseña
        if (empty($data['usuario']) || empty($data['contraseña'])) {
            $errores[] = 'Debe completar el nombre de usuario y la contraseña';
        } else {
            if (strlen($data['usuario']) < 4 || strlen($data['usuario']) > 20) {
                $errores[] = 'El nombre de usuario debe tener entre 4 y 20 caracteres';
            }
            if ($this->buscarPorUsername($data['usuario'])) {
                $errores[] = 'Este nombre de usuario ya está siendo utilizado';
            }
        }

        if (!empty($data['contraseña'])) {
            if (strlen($data['contraseña']) < 5) {
                $errores[] = 'La contraseña debe tener al menos 5 caracteres';
            }
            if ($data['contraseña'] !== ($data['confirmar_contraseña'] ?? '')) {
                $errores[] = 'Las contraseñas no coinciden';
            }
        }

        return $errores;
    }

    public function crearUsuario(array $data): void
    {
        //Delegamos la carga del domicilio al servicio correspondiente
        $idDomicilio = $this->domicilioService->guardar($data);

        // Insertamos el nuevo usuario con el ID del domicilio asociado
        $this->usuarioModel->insert([
            'nombre_usuario'     => $data['nombre'],
            'apellido_usuario'   => $data['apellido'],
            'dni'                => $data['dni'],
            'celular'            => $data['celular'],
            'domicilio_id'       => $idDomicilio,
            'usuario'            => $data['usuario'],
            'contraseña_usuario' => password_hash($data['contraseña'], PASSWORD_BCRYPT),
            'perfil_id'          => 2, // Cliente por defecto
            'estado_usuario'     => 1  // Activo por defecto
        ]);
    }

    public function validarDatosSesion(array $data): array
    {
        $errores = [];
        $userStr = $data['usuario'] ?? '';
        $passStr = $data['contraseña'] ?? '';

        if (empty($userStr) || empty($passStr)) {
            $errores[] = 'Debe completar todos los campos para iniciar sesión';
            return $errores; // En sesión, si faltan campos, no tiene sentido validar lo demás
        }

        $usuario = $this->usuarioModel->where('usuario', $userStr)->first();
        // Validaciones de usuario y contraseña, no se especifica cual es incorrecto por seguridad
        if (!$usuario) {
            $errores[] = 'El usuario ingresado no existe o la contraseña es incorrecta';
        } else {
            if (!password_verify($passStr, $usuario['contraseña_usuario'])) {
                $errores[] = 'El usuario ingresado no existe o la contraseña es incorrecta';
            }

            if ($usuario['estado_usuario'] != 1) {
                $errores[] = 'Su cuenta se encuentra inactiva. Contacte al administrador';
            }
        }

        return $errores;
    }

    public function establecerSesion(string $username): void
    {
        $usuario = $this->usuarioModel->where('usuario', $username)->first();

        if ($usuario) {
            session()->set([
                'id_usuario'      => $usuario['id_usuario'],
                'usuario_usuario' => $usuario['usuario'],
                'rol_usuario'     => $usuario['perfil_id'],
                'estado_usuario'  => $usuario['estado_usuario'],
                'logueado'        => true
            ]);
        }
    }

    public function buscarPorUsername(string $username)
    {
        return $this->usuarioModel->where('usuario', $username)->first();
    }
}