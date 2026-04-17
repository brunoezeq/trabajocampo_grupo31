<?php

namespace App\Controllers;

use App\Models\usuario_model; 
use App\Models\consulta_model;
use App\Models\domicilio_model;
use App\Models\localidad_model;
use App\Controllers\provincia_model;
use App\Models\venta_model;
use App\Models\detalle_venta_model;

class UsuarioController extends BaseController{

public function registro(): string
    {
        $localidadModel = new \App\Models\localidad_model();
        $provinciaModel = new \App\Models\Provincia_model(); 

        $data['localidades'] = $localidadModel->findAll();
        $data['provincias']  = $provinciaModel->findAll(); 

         $data["titulo"] = "Login";
        return view('front/header', $data)
             . view('front/registro', $data) 
             . view('front/footer');
    }

    public function login(): string
    {
        $data["titulo"] = "Login";
        return view('front/header', $data)
         . view('front/login')
         . view('front/footer');
    }


// FUNCIÓN PARA REGISTRAR UN USUARIO
    public function registrarUsuario()
    {
        $validation = \Config\Services::validation();
        $request = \Config\Services::request();
        $db = \Config\Database::connect();

$validation->setRules([
    'nombre'               => 'required|min_length[3]|max_length[50]',
    'apellido'             => 'required|min_length[3]|max_length[50]',
    'dni'                  => 'required|max_length[20]|numeric',
    'celular'              => 'required|max_length[20]',
    'usuario'              => 'required|max_length[100]|is_unique[usuario.usuario]',
    'contraseña'           => 'required|max_length[100]',
    'confirmar_contraseña' => 'required|matches[contraseña]',
    'calle'                => 'required|max_length[150]',
    'numero'               => 'required|max_length[10]',
    'codigo_postal'        => 'required|max_length[15]',
    'departamento'         => 'max_length[10]',
    'piso'                 => 'max_length[3]',
    'provincia_id'         => 'required|integer',
    'localidad_id'         => 'required|integer'
],
[
   'nombre' => [
        'required'    => 'El nombre es obligatorio.',
        'min_length'  => 'El nombre debe tener al menos 3 caracteres.',
        'max_length'  => 'El nombre no puede superar los 50 caracteres.',
        'alpha_space' => 'El nombre solo debe contener letras.'
    ],
    'apellido' => [
        'required'    => 'El apellido es obligatorio.',
        'min_length'  => 'El apellido debe tener al menos 3 caracteres.',
        'max_length'  => 'El apellido no puede superar los 50 caracteres.',
        'alpha_space' => 'El apellido solo debe contener letras.'
    ],
    'dni' => [
        'required'   => 'El DNI es obligatorio.',
        'numeric'    => 'El DNI debe contener solo números.',
        'max_length' => 'El DNI no puede superar los 20 caracteres.'
    ],
    'celular' => [
        'required'   => 'El número de celular es obligatorio.',
        'max_length' => 'El celular no puede superar los 20 caracteres.'
    ],
    'usuario' => [
        'required'  => 'Debe ingresar un nombre de usuario.',
        'max_length'=> 'El usuario no puede superar los 100 caracteres.',
        'is_unique' => 'Este usuario ya está registrado, elija otro.'
    ],
    'contraseña' => [
        'required'   => 'La contraseña es obligatoria.',
        'max_length' => 'La contraseña no puede superar los 100 caracteres.'
    ],
    'confirmar_contraseña' => [
        'required' => 'Debe confirmar su contraseña.',
        'matches'  => 'Las contraseñas no coinciden.'
    ],
    'calle' => [
        'required'   => 'La calle es obligatoria.',
        'max_length' => 'La calle no puede superar los 150 caracteres.'
    ],
    'numero' => [
        'required'   => 'El número de domicilio es obligatorio.',
        'max_length' => 'El número no puede superar los 10 caracteres.'
    ],
    'codigo_postal' => [
        'required'   => 'El código postal es obligatorio.',
        'max_length' => 'El código postal no puede superar los 15 caracteres.'
    ],
    'departamento' => [
        'max_length' => 'El valor de departamento no puede superar los 10 caracteres.'
    ],
    'piso' => [
        'numeric'    => 'El número de piso debe ser numérico.',
        'max_length' => 'El número de piso no puede superar los 3 caracteres.'
    ],
    'provincia_id' => [
        'required' => 'Debe seleccionar una provincia.',
        'integer'  => 'La provincia seleccionada no es válida.'
    ],
    'localidad_id' => [
        'required' => 'Debe seleccionar una localidad.',
        'integer'  => 'La localidad seleccionada no es válida.'
    ]
]);
        if ($validation->withRequest($request)->run()) {
            
            // INICIO DE TRANSACCION
            $db->transStart();

            // Insertar domicilio
            $domicilioModel = new Domicilio_model();
            $datosDomicilio = [
                'calle'         => $request->getPost('calle'),
                'numero'        => $request->getPost('numero'),
                'piso'          => $request->getPost('piso'),
                'departamento'  => $request->getPost('departamento'),
                'codigo_postal' => $request->getPost('codigo_postal'),
                'localidad_id'  => $request->getPost('localidad_id')
            ];
            $domicilioModel->insert($datosDomicilio);
            $nuevoDomicilioId = $domicilioModel->getInsertID();

            //Insertar usuario con el domicilio recién creado
            $usuarioModel = new Usuario_model();
            $datosUsuario = [
                'nombre_usuario'     => $request->getPost('nombre'),
                'apellido_usuario'   => $request->getPost('apellido'),
                'dni'                => $request->getPost('dni'),
                'celular'            => $request->getPost('celular'),
                'domicilio_id'       => $nuevoDomicilioId,
                'usuario'            => $request->getPost('usuario'),
                'contraseña_usuario' => password_hash($request->getPost('contraseña'), PASSWORD_BCRYPT),
                'perfil_id'          => 2,
                'estado_usuario'     => 1
            ];
            $usuarioModel->insert($datosUsuario);

            // Finalizar transacción
            $db->transComplete();

            if ($db->transStatus() === false) {
                return redirect()->back()->with('error', 'Error al registrar. Intente de nuevo.');
            }

            return redirect()->route('login')->with('mensaje', 'Usuario registrado con éxito');

        } else {
            //Recargar formulario con errores si lo hay
            $localidadModel = new Localidad_model();
            $provinciaModel = new \App\Models\Provincia_model(); 

            $data['localidades'] = $localidadModel->findAll();
            $data['provincias'] =  $provinciaModel->findAll();
            $data['titulo'] = 'Registro';
            $data['validation'] = $validation->getErrors();

            return view('front/header', $data)
                 . view('front/registro', $data)
                 . view('front/footer');
        }
    }

    public function getLocalidadesPorProvincia($provinciaId)
{
    $localidadModel = new \App\Models\localidad_model();
    $localidades = $localidadModel->where('provincia_id', $provinciaId)->findAll();
    
    $html = '<option value="">Seleccione una localidad</option>';
    foreach ($localidades as $loc) {
        $html .= '<option value="'.$loc['id_localidad'].'">'.$loc['nombre_localidad'].'</option>';
    }
    echo $html;
}

    //FUNCIÓN PARA INICIAR SESIÓN    
    public function iniciarSesion()
    {
        helper(['form']);
        
        // Validar entrada
       $validation = \Config\Services::validation();
       $request = \Config\Services::request();

       $validation->setRules(
            [   'usuario'    => 'required',
                'contraseña' => 'required'
        ],
            [ //Errores
                'usuario'    => ['required' => 'Debe ingresar el usuario'],
                'contraseña' => ['required' => 'Debe ingresar la contraseña'],
            ]
        );

       if(!$validation->withRequest($request)->run()){

            $data['titulo'] = 'Iniciar Sesión';
            $data['validation'] = $validation->getErrors();
            return view('front/header', $data)
                   .view('front/login')
                   .view('front/footer'); 

        }

        $usuario = $this->request->getPost('usuario');
        $contrasenia = $this->request->getPost('contraseña');

        $usuarioModel = new \App\Models\Usuario_model();
        $usuarioData = $usuarioModel->where('usuario', $usuario)->first();

        if (is_array($usuarioData) && isset($usuarioData['contraseña_usuario'])) {

            if (password_verify($contrasenia, $usuarioData['contraseña_usuario'])) {

                if ($usuarioData['estado_usuario'] == 1) {
 
                    $datosSesion = [
                        'id_usuario' => $usuarioData['id_usuario'],
                        'usuario_usuario' => $usuarioData['usuario'],
                        'rol_usuario' => $usuarioData['perfil_id'],
                        'estado_usuario' => $usuarioData['estado_usuario'],
                        'logueado' => true
                    ];

                    session()->set($datosSesion);

                    
                    if ($usuarioData['perfil_id'] == '1') {
                        return redirect()->to('user_admin');
                    } else {
                        return redirect()->to('/');
                    }
                } else {
                    session()->setFlashdata('mensaje', 'El usuario está inactivo');
                }
                 } else {
                    session()->setFlashdata('mensaje', 'Usuario o contraseña incorrectos');
            }
                } else {
                    session()->setFlashdata('mensaje', 'Usuario o contraseña incorrectos');
        }

         $data['titulo'] = 'Iniciar Sesión';
         return view('front/header', $data)
         . view('front/login')
         . view('front/footer');
    }

    //FUNCIÓN PARA CERRAR SESIÓN
    public function cerrarSesion(){
        $session = session();     
        $session->destroy();      
        return redirect()->to('/'); 
    }

    public function admin(){
        $data['titulo'] = 'Index';
        
        return view('front/header_admin')
               .view('backend/panel_admin')
               .view('front/footer_admin');
    }
}