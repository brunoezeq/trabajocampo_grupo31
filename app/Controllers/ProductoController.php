<?php

namespace App\Controllers;
use App\Models\producto_model; 
use App\Models\categoria_model;

class ProductoController extends BaseController{


public function formularioCargarProducto()
{
    $request = \Config\Services::request();
    $data['titulo'] = 'Cargar Producto';
    $data['errores'] = null; // Inicializamos sin errores

    // Detectamos si hubo un envío del formulario por POST
    if ($request->getMethod() === 'POST') {
        
        $nombre      = $request->getPost('nombre');
        $descripcion = $request->getPost('descripcion');
        $categoria   = $request->getPost('categoria');
        $imagen      = $request->getFile('imagen');
        $precio      = $request->getPost('precio');
        $stock       = $request->getPost('stock');

        // Si se envío el formulario, validamos los datos del producto
        $erroresDetectados = $this->validarProducto($nombre, $descripcion, $categoria, $imagen, $precio, $stock);

        if (empty($erroresDetectados)) {
            // Si no hay errores de validación, cargamos el Producto y mostramos mensaje de éxito

             $this->cargarProducto($nombre, $descripcion, $categoria, $imagen, $precio, $stock);
             redirect()->to(base_url('formularioCargarProducto'))->with('mensaje', 'Producto cargado con éxito');
        } else {
            // Si hay errrores de validación, los mostramos en la vista
            $data['errores'] = $erroresDetectados;
        }
    }

    //Obtenemos las categorías para mostrar en el formulario
    $categoriaModel = new categoria_model();
    $data['categoria'] = $categoriaModel->obtenerCategorias();

    return view('front/header_admin', $data)
           .view('backend/cargarProducto', $data)
           .view('front/footer_admin');
}
  public function cargarProducto($nombre, $descripcion, $id_categoria, $imagen, $precio, $stock) 
{
    $nombre_aleatorio = $imagen->getRandomName();
    $imagen->move(ROOTPATH . 'public/assets/img', $nombre_aleatorio);

    $data = [
        'nombre_producto'      => $nombre,
        'descripcion_producto' => $descripcion,
        'categoria_producto'   => $id_categoria,
        'imagen_producto'      => $nombre_aleatorio,
        'precio_producto'      => $precio,
        'stock_producto'       => $stock,
        'estado_producto'      => 1
    ];

    $productoModel = new producto_model();
    $productoModel->insert($data);
}

    private function validarProducto($nombre, $descripcion, $id_categoria, $imagen, $precio, $stock)
{
    $validador = \Config\Services::validation();

    $datosParaValidar = [
        'nombre'      => $nombre,
        'descripcion' => $descripcion,
        'categoria'   => $id_categoria,
        //'imagen'      => $imagen,
        'precio'      => $precio,
        'stock'       => $stock
    ];

    $reglas = [
        'nombre'      => 'required|min_length[5]|max_length[20]',
        'descripcion' => 'required|min_length[5]|max_length[50]',
        'categoria'   => 'required|is_not_unique[categoria.id_categoria]',
        'imagen'      => 'uploaded[imagen]|max_size[imagen,4060]|is_image[imagen]',
        'precio'      => 'required|numeric',
        'stock'       => 'required|numeric'
    ];

    $mensajes = [
        'nombre' => [
            'required'   => 'El nombre es obligatorio',
            'min_length' => 'El nombre debe tener al menos 5 caracteres',
            'max_length' => 'El nombre no debe superar los 20 caracteres'
        ],
        'descripcion' => [
            'required'   => 'La descripción es obligatoria',
            'min_length' => 'La descripción debe tener al menos 5 caracteres'
        ],
        'imagen' => [
            'uploaded' => 'Debe seleccionar una imagen',
            'is_image' => 'El archivo debe ser una imagen válida'
        ],
        'categoria' => [
            'required'      => 'La categoría es obligatoria',
            'is_not_unique' => 'La categoría seleccionada no es válida'
        ],
        'precio' => ['required' => 'El precio es obligatorio', 'numeric' => 'El precio debe ser un número'],
        'stock'  => ['required' => 'El stock es obligatorio', 'numeric' => 'El stock debe ser un número']
    ];

    $validador->setRules($reglas, $mensajes);

    if ($validador->run($datosParaValidar)) {
        // Si la validación es exitosa, devolvemos un array vacio
        return [];
    } else {
       // Si la validación falla, retornamos los errores
        return $validador->getErrors();
    }
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


    public function formularioEditarProducto($id = null)
{
    if ($id === null) {
       return redirect()->to(base_url('gestionarProductos'))->with('mensaje', 'Error: ID de producto no proporcionado.');
    }

    $request = \Config\Services::request();
    $productoModel = new producto_model();
    $categoriaModel = new categoria_model();

    $data['titulo'] = 'Editar Producto';
    $data['errores'] = []; // Inicializamos sin errores

    // Detectamos si el usuario envió el formulario por POST
    if ($request->getMethod() === 'POST') {
        //Obtenemos datos del producto
        $nombre      = $request->getPost('nombre');
        $descripcion = $request->getPost('descripcion');
        $categoria   = $request->getPost('categoria');
        $imagen      = $request->getFile('imagen');
        $precio      = $request->getPost('precio');
        $stock       = $request->getPost('stock');

        // Validamos los datos del producto
        $data['errores'] = $this->validarProducto($nombre, $descripcion, $categoria, $imagen, $precio, $stock);

        if (empty($data['errores'])) {
            // Si no hay errores, actualizamos los datos del producto
             $this->actualizarProducto($id, $nombre, $descripcion, $categoria, $imagen, $precio, $stock);
            // Mostramos mensaje de éxito en el listado de productos.
             return redirect()->to(base_url('gestionarProductos'))->with('mensaje', 'Producto actualizado con éxito');
        }
        
        //Si hay errores de validación, los mostramos en el listado de productos
        return redirect()->to(base_url('gestionarProductos'))
                             ->withInput() 
                             ->with('mensaje', 'Hubo errores en la actualización.')
                             ->with('errores', $data['errores']); 
    }

    // Preparamos datos para la vista
    $data['producto'] = $productoModel->find($id);
    $data['categoria'] = $categoriaModel->obtenerCategorias();

    //Si no se encuentra un producto, mostar el error correspondiente
    if (!$data['producto']) {
        return redirect()->to(base_url('gestionarProductos'))->with('mensaje', 'El producto solicitado no existe.');
    }

    return view('front/header_admin', $data)
           .view('backend/editarProducto', $data)
           .view('front/footer_admin');
}

    public function actualizarProducto($id_producto, $nombre, $descripcion, $id_categoria, $imagen, $precio, $stock)
{
    $productoModel = new producto_model();

    $nombre_aleatorio = $imagen->getRandomName();
    $imagen->move(ROOTPATH . 'public/assets/img', $nombre_aleatorio);

    $data = [
        'nombre_producto'      => $nombre,
        'descripcion_producto' => $descripcion,
        'categoria_producto'   => $id_categoria,
        'imagen_producto'      => $nombre_aleatorio,
        'precio_producto'      => $precio,
        'stock_producto'       => $stock
    ];

    $productoModel->update($id_producto, $data);
}


    public function eliminarProducto($id){
        $data = ['estado_producto' => 0]; 
        $producto = new producto_model();
        $producto->update($id, $data);
        return redirect()->route('gestionarProductos')->with('mensaje', 'Producto eliminado con éxito');

    }

    public function activarProducto($id){
        $data = ['estado_producto' => 1];
        $producto = new producto_model();
        $producto->update($id, $data);
        return redirect()->route('gestionarProductos')->with('mensaje', 'Producto activado con éxito');
 
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