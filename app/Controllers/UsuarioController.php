<?php

namespace App\Controllers;

use App\Models\usuario_model; 
use App\Models\consulta_model;
use App\Models\domicilio_model;
use App\Models\localidad_model;
use App\Controllers\provincia_model;
use App\Models\venta_model;
use App\Models\detalle_venta_model;

use App\Services\UsuarioService;
use App\Services\UbicacionService;
use App\Services\DomicilioService;

class UsuarioController extends BaseController  {
        
    protected $usuarioService;
    protected $ubicacionService;
    protected $domicilioService;

    public function __construct()
    {
        $this->usuarioService   = \Config\Services::usuarioService();
        $this->ubicacionService = \Config\Services::ubicacionService();
        $this->domicilioService = \Config\Services::domicilioService();
    }

    public function mostrarRegistro(): string
    {
        $data['titulo'] = "Registro";
        $data['provincias'] = $this->ubicacionService->obtenerTodasLasProvincias();

        return view('front/header', $data)
             . view('front/registro', $data)
             . view('front/footer');
    }

    public function registrarUsuario()
        {
             // Datos de usuario
             $nombre              = $this->request->getPost('nombre');
             $apellido            = $this->request->getPost('apellido');
             $dni                 = $this->request->getPost('dni');
             $celular             = $this->request->getPost('celular');
             $usuario             = $this->request->getPost('usuario');
             $contraseña          = $this->request->getPost('contraseña');
             $confirmarContraseña = $this->request->getPost('confirmar_contraseña');
             $localidadId         = $this->request->getPost('localidad_id');

             // Datos de domicilio
             $calle        = $this->request->getPost('calle');
             $numero       = $this->request->getPost('numero');
             $codigoPostal = $this->request->getPost('codigo_postal');
             $piso         = $this->request->getPost('piso');
             $departamento = $this->request->getPost('departamento');

             // Validar cada grupo por separado
             $errores = $this->usuarioService->validarDatosRegistro(
                 $nombre, $apellido, $dni, $celular, $usuario, $contraseña, $confirmarContraseña, $localidadId
             );
             $erroresDom = $this->domicilioService->validarDatosDomicilio(
                 $calle, $numero, $codigoPostal, $localidadId, $piso, $departamento
             );
             $errores = array_merge($errores, $erroresDom);

           if ($errores) {
                  return redirect()->back()->withInput()->with('errores', $errores);
                }

           // Crear domicilio primero, luego usuario con el ID obtenido
           $idDomicilio = $this->domicilioService->guardar(
               $calle, $numero, $codigoPostal, $localidadId, $piso, $departamento
           );
           $this->usuarioService->crearUsuario(
               $nombre, $apellido, $dni, $celular, $usuario, $contraseña, $idDomicilio
           );
           return redirect()->to('login')->with('mensaje', 'Usuario registrado con éxito');
           }

    public function mostrarLogin(): string
    {
        $data["titulo"] = "Iniciar Sesión";

        return view('front/header', $data)
             . view('front/login', $data)
             . view('front/footer');
    }

    public function iniciarSesion()
    {
             $usuario    = $this->request->getPost('usuario');
             $contraseña = $this->request->getPost('contraseña');

             $errores = $this->usuarioService->validarDatosSesion($usuario, $contraseña);
             if (count($errores) > 0) {
                return redirect()->back()->withInput()->with('errores', $errores);
             }
             $this->usuarioService->establecerSesion($usuario);

              $usuarioData = $this->usuarioService->buscarPorUsername($usuario);
             if ($usuarioData['perfil_id'] == 1) {
        return redirect()->to('/user_admin')->with('mensaje', 'Bienvenido administrador');
        }
        return redirect()->to('/')->with('mensaje', 'Bienvenido usuario');
    }

     public function getLocalidadesPorProvincia($provinciaId)
{   
    // Obtenemos el array de localidades desde el servicio
     $localidades = $this->ubicacionService->obtenerLocalidadesPorProvincia($provinciaId);

     // Devolvemos los datos en formato JSON
     return $this->response->setJSON($localidades);
}

public function mostrarPanelAdministrador()
{
    // Verificamos si existe la sesión y si el rol es 1 (Admin)
    if (session()->get('logueado') && session()->get('rol_usuario') == 1) {

        return view('front/header_admin').view('backend/panel_admin').view('front/footer'); 
    }

    // Si no es admin, lo mandamos al inicio con un error
    return redirect()->to('/')->with('errores', ['No tiene permisos para acceder a esta sección']);
}

public function cerrarSesion(){
        session()->destroy();
        return redirect()->to('/');
    }
}