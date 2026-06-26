<?php

namespace App\Controllers;
use App\Models\producto_model; 
use App\Models\categoria_model;
use App\Services\ValidationException;

class ProductoController extends BaseController{

//Servicios de producto y categoría para manejar la lógica de negocio 
protected $productoService;
protected $categoriaService;

public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger) {
    parent::initController($request, $response, $logger);
    //Instanciamos los servicios producto y categoria
    $this->productoService = new \App\Services\ProductoService();
    $this->categoriaService = new \App\Services\CategoriaService();
    }



  public function mostrarFormularioCarga() {
    $data = [
        'titulo'     => 'Cargar Producto',
        // Llamada al servicio para obtener todas las categorías
        'categoria'  => $this->categoriaService->obtenerTodas()
    ];
    
    return view('front/header_admin', $data)
         . view('backend/cargarProducto', $data)
         . view('front/footer_admin');
}

public function procesarFormularioAgregar() {
    $request = \Config\Services::request();
    //Recupera datos del formulario
    $nombre      = $request->getPost('nombre');
    $descripcion = $request->getPost('descripcion');
    $precio      = $request->getPost('precio');
    $stock       = $request->getPost('stock');
    $categoria   = $request->getPost('categoria');
    $imagen = $request->getFile('imagen');

    //Llamada al servicio para validar los datos del producto
    try {
        $this->productoService->validarDatos($nombre, $descripcion, $precio, $stock, $imagen);
    } catch (ValidationException $ve) {
        // Mostrar errores de validación (array)
        return redirect()->back()->withInput()->with('errores', $ve->getErrors());
    } catch (\Exception $ex) {
        // Error inesperado
        return redirect()->back()->withInput()->with('mensaje', $ex->getMessage());
    }

    //Si no hay errores de validación, se llama al servicio para insertar el producto
    $this->productoService->insertar($nombre, $descripcion, $precio, $stock, $categoria, $imagen);
    
    //Muestra un mensaje de éxito
     return redirect()->back()->with('mensaje', 'Guardado con éxito');
}

  public function mostrarFormularioEditar($id = null) {

    $data = [
        'titulo'     => 'Editar Producto',
        // Llamada al servicio producto para obtener los datos del producto a editar
        'producto'   => $this->productoService->obtenerPorId($id),
        // Llamada al servicio para obtener todas las categorías
        'categoria'  => $this->categoriaService->obtenerTodas(),
    ];
    return view('front/header_admin', $data)
         . view('backend/editarProducto', $data)
         . view('front/footer_admin');
}

public function editarProducto($id = null) {
        $request = \Config\Services::request();
        //Recupera datos del formulario
        $nombre      = $request->getPost('nombre');
        $descripcion = $request->getPost('descripcion');
        $precio      = $request->getPost('precio');
        $stock       = $request->getPost('stock');
        $categoria   = $request->getPost('categoria');
        $imagen = $request->getFile('imagen');

        //Llamada al servicio para validar los datos del producto
    try {
        $this->productoService->validarDatos($nombre, $descripcion, $precio, $stock, $imagen);
    } catch (ValidationException $ve) {
        return redirect()->back()->withInput()->with('errores', $ve->getErrors());
    } catch (\Exception $ex) {
        return redirect()->back()->withInput()->with('mensaje', $ex->getMessage());
    }

     //Si no hay errores de validación, se llama al servicio para actualizar el producto
    $this->productoService->actualizar($id, $nombre, $descripcion, $precio, $stock, $categoria, $imagen);

    //Si el producto se editó correctamente, se muestra un mensaje de éxito
     return redirect()->back()->with('mensaje', 'Producto editado con éxito');

}


 public function eliminarProducto($id)
    {
         $this->productoService->cambiarEstado($id, 0);

        return redirect()->back()->with('mensaje', 'Producto eliminado con éxito');
    }

 public function activarProducto($id)
    {
        $this->productoService->cambiarEstado($id, 1);

        return redirect()->back()->with('mensaje', 'Producto activado con éxito');
    }

    public function gestionarProductos()
    {
    $busqueda = $this->request->getGet('busqueda');

    $data = [
        'titulo'    => 'Gestionar Producto',
        'busqueda'  => $busqueda,
        'producto'  => $this->productoService->obtenerProductos($busqueda),
        'categoria' => $this->categoriaService->obtenerTodas()
    ];

    return view('front/header_admin', $data)
         . view('backend/gestionarProductos', $data)
         . view('front/footer_admin');
    }

    public function mostrarCatalogo(){

        $productoModel = new producto_model();

        $precio = $this->request->getGet('precio');
        $categoria = $this->request->getGet('categoria');

        $builder = $productoModel->where('estado_producto', 1) 
                                ->where('stock_producto >', 0)
                                ->join('categoria', 'categoria.id_categoria = producto.categoria_producto');

        if ($precio === 'menos20') {
            $builder->where('precio_producto <', 20000);
        } elseif ($precio === 'mas20') {
            $builder->where('precio_producto >=', 20000);
        }

        if (!empty($categoria)) {
            $builder->where('categoria_producto', $categoria);
        }

        $data['producto'] = $builder->findAll();

        $data['precioSeleccionado'] = $precio;
        $data['categoriaSeleccionada'] = $categoria;

        $data['titulo'] = 'Catálogo';

        return view('front/header', $data)
            . view('front/catalogo')
            . view('front/footer');
    }

    public function filtrarProductos($precio = null, $categoria = null){
        $builder = $this->builder();

        if ($precio === 'menos20') {
            $builder->where('precio <', 20000);
        } elseif ($precio === 'mas20') {
            $builder->where('precio >=', 20000);
        }

        if (!empty($categoria)) {
            $builder->where('categoria_id', $categoria);
        }

        return $builder->get()->getResultArray();
    }

    public function descontarStock($idProducto, $cantidad)
    {
    $db = \Config\Database::connect();

    $db->query(
        "CALL sp_actualizar_stock(?, ?)",
        [$idProducto, $cantidad]
    );
    }

}