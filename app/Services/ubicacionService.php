<?php

namespace App\Services;

use App\Models\Provincia_model;
use App\Models\Localidad_model;

class UbicacionService
{
    protected $provinciaModel;
    protected $localidadModel;

    public function __construct()
    {
        $this->provinciaModel = new Provincia_model();
        $this->localidadModel = new Localidad_model();
    }

    /**
     * Retorna todas las provincias registradas.
     */
    public function obtenerTodasLasProvincias(): array
    {
        return $this->provinciaModel->findAll();
    }

    /**
     * Retorna las localidades asociadas a una provincia específica.
     */
    public function obtenerLocalidadesPorProvincia(int $provinciaId): array
    {
        return $this->localidadModel->where('provincia_id', $provinciaId)->findAll();
    }

    /**
     * Verifica si una localidad existe por su ID.
     */

    public function existeLocalidad(int $id): bool
    {
        // Verifica que el ID sea mayor a 0 y exista en la tabla
        return $id > 0 && $this->localidadModel->find($id) !== null;
    }
}