<?php namespace App\Services;

class PerfilService {
    protected $model;

    public function __construct() {
        $this->model = new \App\Models\perfil_model();
    }

    public function obtenerPerfiles() {
        return $this->model->findAll(); 
    }
}