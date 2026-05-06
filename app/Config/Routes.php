<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

if(file_exists (SYSTEMPATH . 'Config/Routes.php')){
    require SYSTEMPATH . 'Config/Routes.php'; 
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('contacto', 'Home::contacto');                             
$routes->get('comercializacion', 'Home::comercializacion');             
$routes->get('terminos_y_usos', 'Home::terminos');                      
$routes->get('quienes_somos', 'Home::somos'); 

/* --- USUARIO --- */
$routes->get('registro', 'UsuarioController::mostrarRegistro');  //muestra vista de registro
$routes->get('login', 'UsuarioController::mostrarLogin');        // muestra vista para iniciar sesión
$routes->post('registro', 'UsuarioController::registrarUsuario'); //registrar usuario
$routes->post('verificarUsuario', 'UsuarioController::iniciarSesion'); 
$routes->get('logout', 'UsuarioController::cerrarSesion'); 
$routes->get('user_admin', 'UsuarioController::mostrarPanelAdministrador', ['filter' => 'roladmin']); 
$routes->get('usuario/getLocalidadesPorProvincia/(:num)', 'UsuarioController::getLocalidadesPorProvincia/$1');// ruta para obtener localidades por provincia (registro)

/* --- PRODUCTOS --- */
$routes->get('catalogo', 'ProductoController::mostrarCatalogo'); //muestra vista catálogo
$routes->get('cargarProducto', 'ProductoController::mostrarFormularioCarga', ['filter' => 'roladmin']); // muestra vista cargar producto
$routes->post('registrarProducto', 'ProductoController::registrarProducto', ['filter' => 'roladmin']); // procesa datos del formulario de carga de producto
$routes->get('gestionarProductos', 'ProductoController::gestionarProductos', ['filter' => 'roladmin']); //muestra vista gestionar producto
$routes->get('editarProducto/(:num)', 'ProductoController::mostrarFormularioEditar/$1', ['filter' => 'roladmin']);
$routes->post('editarProducto/(:num)', 'ProductoController::editarProducto/$1', ['filter' => 'roladmin']);
$routes->get('eliminarProducto/(:num)', 'ProductoController::eliminarProducto/$1');
$routes->get('activarProducto/(:num)', 'ProductoController::activarProducto/$1');



