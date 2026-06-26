<?php namespace App\Services;

class ProductoService {

    protected $model;

    public function __construct() {

        $this->model = new \App\Models\producto_model();
        
    }

    public function insertar($nombre, $descripcion, $precio, $stock, $categoria, $imagen) {

        $datosProducto = [
        'nombre_producto'      => $nombre,
        'descripcion_producto' => $descripcion,
        'precio_producto'      => $precio,
        'stock_producto'       => $stock,
        'categoria_producto'   => $categoria,
        'estado_producto'      => 1
    ];
        if ($imagen && $imagen->isValid()) {
            $nombreImg = $imagen->getRandomName();
            $imagen->move(ROOTPATH . 'public/assets/img', $nombreImg);
           $datosProducto['imagen_producto'] = $nombreImg;
        }
        return $this->model->insert($datosProducto);
    }

    public function obtenerPorId($id) {
        return $this->model->find($id);
    }

    public function actualizar($id, $nombre, $descripcion, $precio, $stock, $categoria, $imagen = null) {
        $datosProducto = [
        'nombre_producto'      => $nombre,
        'descripcion_producto' => $descripcion,
        'precio_producto'      => $precio,
        'stock_producto'       => $stock,
        'categoria_producto'   => $categoria,
    ];

        if ($imagen && $imagen->isValid()) {
            $nombreImg = $imagen->getRandomName();
            $imagen->move(ROOTPATH . 'public/assets/img', $nombreImg);
            $datosProducto['imagen_producto'] = $nombreImg;
        }
        return $this->model->update($id, $datosProducto);
    }

    public function cambiarEstado($id, $estado) {
   //Comprueba que el estado actual sea 0 o 1
    if ($estado == 0 || $estado == 1) {
        $datos = [
            'estado_producto' => $estado
        ];

        return $this->model->update($id, $datos);
    }
    return false;
}

public function validarDatos($nombre, $descripcion, $precio, $stock, $imagen = null) {
        $errores = [];

        // Validación de Nombre
        if (empty($nombre)) {
            $errores['nombre'] = 'El nombre es obligatorio';
        } elseif (strlen($nombre) < 5 || strlen($nombre) > 20) {
            $errores['nombre'] = 'El nombre debe tener entre 5 y 20 caracteres';
        }

        // Validación de Descripción
        if (empty($descripcion)) {
            $errores['descripcion'] = 'La descripción es obligatoria';
        } elseif (strlen($descripcion) < 5) {
            $errores['descripcion'] = 'La descripción debe tener al menos 5 caracteres';
        }

        // Validación de Precio
        if (!isset($precio) || !is_numeric($precio)) {
            $errores['precio'] = 'El precio debe ser un número';
        }

        // Validación de Stock
        if (!isset($stock) || !is_numeric($stock)) {
            $errores['stock'] = 'El stock debe ser un número';
        }

        // Validación de Imagen
        if ($imagen !== null) {
            if (!$imagen->isValid()) {
                $errores['imagen'] = 'El archivo debe ser una imagen válida';
            } elseif ($imagen->getSizeByUnit('kb') > 4060) {
                $errores['imagen'] = 'La imagen es demasiado pesada (máx 4MB)';
            }
        }

        // Si hay errores, lanzar una excepción con el detalle
        if (!empty($errores)) {
            throw new ValidationException($errores);
        }

        return true;
    }

   public function obtenerProductos($busqueda = null)
    {
    if (!empty($busqueda)) {
        $db = \Config\Database::connect();

        $query = $db->query(
            "CALL sp_buscar_productos(?)",
            [$busqueda]
        );

        return $query->getResultArray();
    }

    $productoModel = new \App\Models\producto_model();

    return $productoModel
        ->select('producto.*, categoria.descripcion_categoria')
        ->join('categoria', 'categoria.id_categoria = producto.categoria_producto')
        ->findAll();
    }

    public function descontarStock($idProducto, $cantidad)
    {
        $db = \Config\Database::connect();
        return $db->query(
            "CALL sp_actualizar_stock(?, ?)",
            [$idProducto, $cantidad]
        );
    }

}