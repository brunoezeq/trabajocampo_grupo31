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

class UsuarioController extends BaseController  {
        
    protected $usuarioService;
    protected $ubicacionService;

    public function __construct()
    {
        $this->usuarioService = new UsuarioService();
        $this->ubicacionService = new UbicacionService();
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
             $datos = $this->request->getPost();
             $errores = $this->usuarioService->validarDatosRegistro($datos);
           if ($errores) {
                  return redirect()->back()->withInput()->with('errores', $errores);
                }
           $this->usuarioService->crearUsuario($datos);
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
             $datos = $this->request->getPost();
             $errores = $this->usuarioService->validarDatosSesion($datos);
             if (count($errores) > 0) {
                return redirect()->back()->withInput()->with('errores', $errores);
             }
             $this->usuarioService->establecerSesion($datos['usuario']);

              $usuario = $this->usuarioService->buscarPorUsername($datos['usuario']);
             if ($usuario['perfil_id'] == 1) {
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