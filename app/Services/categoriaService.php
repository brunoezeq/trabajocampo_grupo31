<?php namespace App\Services;

class CategoriaService {
    protected $model;

    public function __construct() {
        $this->model = new \App\Models\CategoriaModel();
    }

 
    public function validar($datos) {
        $errores = [];

        if (empty($datos['nombre_categoria'])) {
            $errores['nombre_categoria'] = 'El nombre de la categoría es obligatorio.';
        } elseif (strlen($datos['nombre_categoria']) < 3) {
            $errores['nombre_categoria'] = 'El nombre debe tener al menos 3 caracteres.';
        }

        if (empty($datos['descripcion_categoria'])) {
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

    public function insertar($datos) {
        return $this->model->insert($datos);
    }

    public function actualizar($id, $datos) {
        return $this->model->update($id, $datos);
    }

    public function eliminar($id) {

        return $this->model->delete($id);
    }
}