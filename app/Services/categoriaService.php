<?php namespace App\Services;

class CategoriaService {
    protected $model;

    public function __construct() {
        $this->model = new \App\Models\categoria_model();
    }

 
    public function validar($nombreCategoria, $descripcionCategoria) {
        $errores = [];

        if (empty($nombreCategoria)) {
            $errores['nombre_categoria'] = 'El nombre de la categoría es obligatorio.';
        } elseif (strlen($nombreCategoria) < 3) {
            $errores['nombre_categoria'] = 'El nombre debe tener al menos 3 caracteres.';
        }

        if (empty($descripcionCategoria)) {
            $errores['descripcion_categoria'] = 'La descripción es obligatoria.';
        }

        return $errores;
    }

 
    public function obtenerTodas() {
        return $this->model->findAll(); 
    }

    public function obtenerPorId($id) {
        return $this->model->find($id);
    }

    public function insertar($nombreCategoria, $descripcionCategoria) {
        return $this->model->insert([
            'nombre_categoria'      => $nombreCategoria,
            'descripcion_categoria' => $descripcionCategoria,
        ]);
    }

    public function actualizar($id, $nombreCategoria, $descripcionCategoria) {
        return $this->model->update($id, [
            'nombre_categoria'      => $nombreCategoria,
            'descripcion_categoria' => $descripcionCategoria,
        ]);
    }

    public function eliminar($id) {

        return $this->model->delete($id);
    }
}