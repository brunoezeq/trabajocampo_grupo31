<?php

namespace App\Controllers;
use App\Models\producto_model; 
use App\Models\categoria_model;

class ProductoController extends BaseController{


  public function mostrarFormularioCarga() {
     //Servicio de categorias
    $categoriaService = new \App\Services\CategoriaService();
    
    $data = [
        'titulo'     => 'Cargar Producto',
        // Llamada al servicio para obtener todas las categorías
        'categoria'  => $categoriaService->obtenerTodas() 
    ];
    
    return view('front/header_admin', $data)
         . view('backend/cargarProducto', $data)
         . view('front/footer_admin');
}

public function registrarProducto() {
    //Servicio de productos
    $productoService = new \App\Services\ProductoService();
    $request = \Config\Services::request();
    //Recupera datos del formulario
    $datos = $request->getPost();
    $imagen = $request->getFile('imagen');

    //Llamada al servicio para validar los datos del producto
    $errores = $productoService->validarDatos($datos, $imagen);

    if (!empty($errores)) {
        //Si hay errores de validación, se los muestra al usuario
        return redirect()->back()->withInput()->with('errores', $errores);
    }
    //Si no hay errores de validación, se llama al servicio para insertar el producto
    $resultado = $productoService->insertar($datos, $imagen);

    if ($resultado === false) {
        //Si no se pudo insertar el producto, se muestra el error correspondiente
        return redirect()->back()->withInput()->with('errores', 'Hubo un problema técnico y no se pudo guardar el producto.');
    }
    //Si el producto se insertó correctamente, se redirige con un mensaje de éxito
     return redirect()->back()->with('mensaje', 'Guardado con éxito');
}

  public function mostrarFormularioEditar($id = null) {
    //Servicio de productos
    $productoService = new \App\Services\ProductoService();
     //Servicio de categorias
    $categoriaService = new \App\Services\CategoriaService();
    
    $data = [
        'titulo'     => 'Editar Producto',
        // Llamada al servicio producto para obtener los datos del producto a editar
        'producto'   => $productoService->obtenerPorId($id),
        // Llamada al servicio para obtener todas las categorías
        'categoria'  => $categoriaService->obtenerTodas(),
    ];
    if(data['producto'] == null){
        //Si no se encuentra el producto, se muestra el error correspondiente 
            return redirect()->back()->with('mensaje', 'No se encontro el producto solicitado');
    }

    return view('front/header_admin', $data)
         . view('backend/editarProducto', $data)
         . view('front/footer_admin');
}

public function editarProducto($id = null) {
        $productoService = new \App\Services\ProductoService();
        $request = \Config\Services::request();
        //Recupera datos del formulario
        $datos = $request->getPost();
        $imagen = $request->getFile('imagen');

        //Llamada al servicio para validar los datos del producto
    $errores = $productoService->validarDatos($datos, $imagen);

    if (!empty($errores)) {
        //Si hay errores de validación, se los muestra al usuario
        return redirect()->back()->withInput()->with('errores', $errores);
    }

     //Si no hay errores de validación, se llama al servicio para actualizar el producto
    $resultado = $productoService->actualizar($id, $datos, $imagen);

     if ($resultado === false) {
        //Si no se pudo editar el producto, se muestra un error
        return redirect()->back()->withInput()->with('errores', 'Hubo un problema técnico y no se pudo editar el producto.');
    }

    //Si el producto se editó correctamente, se redirige con un mensaje de éxito
     return redirect()->back()->with('mensaje', 'Producto editado con éxito');

}

 public function cambiarEstadoProducto($id, $estado)
    {
        $productoService = new \App\Services\ProductoService();
        $productoModel = new producto_model();

        $productoService->cambiarEstado($id, $estado);

        $mensaje = $estado == 1 
            ? 'Producto activado con éxito' 
            : 'Producto desactivado con éxito';

        return redirect()->back()->with('mensaje', $mensaje);
    }


    public function gestionarProductos(){

        $producto = new producto_model();
        $categoria = new categoria_model();

        $busqueda = $this->request->getGet('busqueda');
      
        $data['categoria'] = $categoria->obtenerCategorias();

        $query = $producto->select('producto.*, categoria.descripcion_categoria')
                        ->join('categoria', 'categoria.id_categoria = producto.categoria_producto');

        if (!empty($busqueda)) {
            $query->like('nombre_producto', $busqueda);
        }

        $data['producto'] = $query->findAll();

        $data['busqueda'] = $busqueda;
        $data['titulo'] = 'Gestionar Producto';

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

}