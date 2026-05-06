<?php namespace App\Services;

class ProductoService {

    protected $model;

    public function __construct() {

        $this->model = new \App\Models\producto_model();
        
    }

    public function validarDatos($datos, $imagen = null) {
        $errores = [];

        // Validación de Nombre
        if (empty($datos['nombre'])) {
            $errores['nombre'] = 'El nombre es obligatorio';
        } elseif (strlen($datos['nombre']) < 5 || strlen($datos['nombre']) > 20) {
            $errores['nombre'] = 'El nombre debe tener entre 5 y 20 caracteres';
        }

        // Validación de Descripción
        if (empty($datos['descripcion'])) {
            $errores['descripcion'] = 'La descripción es obligatoria';
        } elseif (strlen($datos['descripcion']) < 5) {
            $errores['descripcion'] = 'La descripción debe tener al menos 5 caracteres';
        }

        // Validación de Precio
        if (!isset($datos['precio']) || !is_numeric($datos['precio'])) {
            $errores['precio'] = 'El precio debe ser un número';
        }

        // Validación de Stock
        if (!isset($datos['stock']) || !is_numeric($datos['stock'])) {
            $errores['stock'] = 'El stock debe ser un número';
        }

        // Validación de Imagen (Solo si se proporciona el objeto de archivo)
        // Validamos solo si hay un intento de carga o si es estrictamente necesario
        if ($imagen !== null) {
            if (!$imagen->isValid()) {
                $errores['imagen'] = 'El archivo debe ser una imagen válida';
            } elseif ($imagen->getSizeByUnit('kb') > 4060) {
                $errores['imagen'] = 'La imagen es demasiado pesada (máx 4MB)';
            }
        }
        return $errores;
    }

    public function insertar($datos, $imagen) {

        $datosProducto = [
        'nombre_producto'      => $datos['nombre'],
        'descripcion_producto' => $datos['descripcion'],
        'precio_producto'      => $datos['precio'],
        'stock_producto'       => $datos['stock'],
        'categoria_producto'   => $datos['categoria'],
        'estado_producto'      => 1
    ];
        if ($imagen && $imagen->isValid()) {
            $nombreImg = $imagen->getRandomName();
            $imagen->move(ROOTPATH . 'public/assets/img', $nombreImg);
           $datosProducto['imagen_producto'] = $nombreImg;
        }
        return $this->model->insert($datosProducto);
    }

    public function obtenerTodos($busqueda = null) {
        if ($busqueda) {
            return $this->model->like('nombre_producto', $busqueda)->findAll();
        }
        return $this->model->findAll();
    }

    public function obtenerPorId($id) {
        return $this->model->find($id);
    }

    public function actualizar($id, $datos, $imagen = null) {
        $datosProducto = [
        'nombre_producto'      => $datos['nombre'],
        'descripcion_producto' => $datos['descripcion'],
        'precio_producto'      => $datos['precio'],
        'stock_producto'       => $datos['stock'],
        'categoria_producto'   => $datos['categoria'],
    ];

        if ($imagen && $imagen->isValid()) {
            $nombreImg = $imagen->getRandomName();
            $imagen->move(ROOTPATH . 'public/assets/img', $nombreImg);
            $datosProducto['imagen_producto'] = $nombreImg;
        }
        return $this->model->update($id, $datosProducto);
    }

       public function eliminar($id) {
        $producto = $this->model->find($id);
        
        if (!$producto) {
            return false;
        }
        return $this->model->update($id, ['estado_producto' => 0]);
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

}