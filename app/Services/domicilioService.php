<?php

namespace App\Services;

use App\Models\Domicilio_model;

class DomicilioService
{
    protected $domicilioModel;

    public function __construct()
    {
        $this->domicilioModel = new Domicilio_model();
    }
    /*
    * Valida los datos de domicilio antes de guardarlos.
    * Retorna un mensaje de error si hay algún problema, o null si todo es correcto
    */

     public function validarDatosDomicilio(array $data): array
    {
    $erroresDom = [];

    // Obligatorios
    if (empty($data['calle']) || empty($data['numero']) || empty($data['codigo_postal']) || empty($data['localidad_id'])) {
        $erroresDom[] = 'Calle, número, código postal y localidad son campos obligatorios';
    }

    // Validación de Calle
    if (!empty($data['calle']) && strlen($data['calle']) > 100) {
        $erroresDom[] = 'El nombre de la calle es demasiado largo';
    }

    // Validación de Número de casa
    if (!empty($data['numero']) && (!is_numeric($data['numero']) || $data['numero'] <= 0 || $data['numero'] > 99999)) {
        $erroresDom[] = 'El número de domicilio debe ser un número positivo válido (máx. 5 dígitos)';
    }

    // Validación de Código Postal
    if (!empty($data['codigo_postal']) && (!is_numeric($data['codigo_postal']) || strlen($data['codigo_postal']) < 4 || strlen($data['codigo_postal']) > 8)) {
        $erroresDom[] = 'El código postal debe tener entre 4 y 8 caracteres numéricos';
    }

    // Validaciones opcionales (Piso y Departamento)
    if (!empty($data['piso']) && strlen($data['piso']) > 10) {
        $erroresDom[] = 'El campo piso es demasiado largo';
    }

    if (!empty($data['departamento']) && strlen($data['departamento']) > 10) {
        $erroresDom[] = 'El campo departamento es demasiado largo';
    }

    return $erroresDom; // Siempre devuelve un array (vacío si no hay errores)
    }

    /**
     * Guarda un nuevo domicilio y retorna el ID generado.
     */
    public function guardar(array $data): int
    {
        $this->domicilioModel->insert([
            'calle'         => $data['calle'],
            'numero'        => $data['numero'],
            'piso'          => $data['piso'] ?? null,
            'departamento'  => $data['departamento'] ?? null,
            'codigo_postal' => $data['codigo_postal'],
            'localidad_id'  => $data['localidad_id']
        ]);

        return $this->domicilioModel->getInsertID();
    }
}