<?php

namespace App\Services;

class MedioPagoService
{
    protected $model;

    public function __construct()
    {
        $this->model = new \App\Models\medio_pago_model();
    }

    /**
     * Devuelve todos los métodos de pago
     *
     * @return array
     */
    public function obtenerMetodosPago(): array
    {
        return $this->model->findAll();
    }
}