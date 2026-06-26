<?php

namespace App\Services;

use App\Models\Usuario_model;
use App\Services\DomicilioService;
use App\Services\UbicacionService;
class UsuarioService
{
    protected $usuarioModel;
    protected $ubicacionService;

    public function __construct()
    {
        $this->usuarioModel     = new Usuario_model();
        $this->ubicacionService = \Config\Services::ubicacionService();
    }

    public function validarDatosRegistro($nombre, $apellido, $dni, $celular, $usuario, $contraseña, $confirmarContraseña, $localidadId): array
    {
        $errores = [];

        // Validación de nombre, apellido, DNI y celular
        if (empty($nombre) || empty($apellido) || empty($dni) || empty($celular)) {
            $errores[] = 'Todos los campos de identidad y contacto son obligatorios';
        }

        if (!empty($dni)) {
            if (!is_numeric($dni) || strlen($dni) < 7 || strlen($dni) > 9) {
                $errores[] = 'El DNI debe tener entre 7 y 9 números';
            } else {
                if ($this->usuarioModel->where('dni', $dni)->first()) {
                    $errores[] = 'El DNI ingresado ya se encuentra registrado en el sistema';
                }
            }
        }

        if (!empty($celular) && (!is_numeric($celular) || strlen($celular) < 10 || strlen($celular) > 15)) {
            $errores[] = 'El celular debe ser un número válido (entre 10 y 15 dígitos)';
        }

        if ($this->usuarioModel->where('celular', $celular)->first()) {
            $errores[] = 'Este número de celular ya está siendo utilizado por otra cuenta';
        }

        // Validación de localidad
        if (!empty($localidadId) && !$this->ubicacionService->existeLocalidad((int)$localidadId)) {
            $errores[] = 'La localidad seleccionada no existe en nuestro sistema';
        }

        // Validación de usuario y contraseña
        if (empty($usuario) || empty($contraseña)) {
            $errores[] = 'Debe completar el nombre de usuario y la contraseña';
        } else {
            if (strlen($usuario) < 4 || strlen($usuario) > 20) {
                $errores[] = 'El nombre de usuario debe tener entre 4 y 20 caracteres';
            }
            if ($this->buscarPorUsername($usuario)) {
                $errores[] = 'Este nombre de usuario ya está siendo utilizado';
            }
        }

        if (!empty($contraseña)) {
            if (strlen($contraseña) < 5) {
                $errores[] = 'La contraseña debe tener al menos 5 caracteres';
            }
            if ($contraseña !== ($confirmarContraseña ?? '')) {
                $errores[] = 'Las contraseñas no coinciden';
            }
        }

        return $errores;
    }

    public function crearUsuario($nombre, $apellido, $dni, $celular, $usuario, $contraseña, $idDomicilio): void
    {
        // Insertamos el nuevo usuario con el ID del domicilio asociado
        $this->usuarioModel->insert([
            'nombre_usuario'     => $nombre,
            'apellido_usuario'   => $apellido,
            'dni'                => $dni,
            'celular'            => $celular,
            'domicilio_id'       => $idDomicilio,
            'usuario'            => $usuario,
            'contraseña_usuario' => password_hash($contraseña, PASSWORD_BCRYPT),
            'perfil_id'          => 2, // Cliente por defecto
            'estado_usuario'     => 1  // Activo por defecto
        ]);
    }

    public function validarDatosSesion($usuario, $contraseña): array
    {
        $errores = [];
        $userStr = $usuario ?? '';
        $passStr = $contraseña ?? '';

        if (empty($userStr) || empty($passStr)) {
            $errores[] = 'Debe completar todos los campos para iniciar sesión';
            return $errores; // En sesión, si faltan campos, no tiene sentido validar lo demás
        }

        $usuarioData = $this->usuarioModel->where('usuario', $userStr)->first();
        // Validaciones de usuario y contraseña, no se especifica cual es incorrecto por seguridad
        if (!$usuarioData) {
            $errores[] = 'El usuario ingresado no existe o la contraseña es incorrecta';
        } else {
            if (!password_verify($passStr, $usuarioData['contraseña_usuario'])) {
                $errores[] = 'El usuario ingresado no existe o la contraseña es incorrecta';
            }

            if ($usuarioData['estado_usuario'] != 1) {
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