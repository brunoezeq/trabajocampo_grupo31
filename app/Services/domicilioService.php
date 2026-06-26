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

     public function validarDatosDomicilio($calle, $numero, $codigoPostal, $localidadId, $piso = null, $departamento = null): array
    {
    $erroresDom = [];

    // Obligatorios
    if (empty($calle) || empty($numero) || empty($codigoPostal) || empty($localidadId)) {
        $erroresDom[] = 'Calle, número, código postal y localidad son campos obligatorios';
    }

    // Validación de Calle
    if (!empty($calle) && strlen($calle) > 100) {
        $erroresDom[] = 'El nombre de la calle es demasiado largo';
    }

    // Validación de Número de casa
    if (!empty($numero) && (!is_numeric($numero) || $numero <= 0 || $numero > 99999)) {
        $erroresDom[] = 'El número de domicilio debe ser un número positivo válido (máx. 5 dígitos)';
    }

    // Validación de Código Postal
    if (!empty($codigoPostal) && (!is_numeric($codigoPostal) || strlen($codigoPostal) < 4 || strlen($codigoPostal) > 8)) {
        $erroresDom[] = 'El código postal debe tener entre 4 y 8 caracteres numéricos';
    }

    // Validaciones opcionales (Piso y Departamento)
    if (!empty($piso) && strlen($piso) > 10) {
        $erroresDom[] = 'El campo piso es demasiado largo';
    }

    if (!empty($departamento) && strlen($departamento) > 10) {
        $erroresDom[] = 'El campo departamento es demasiado largo';
    }

    return $erroresDom; // Siempre devuelve un array (vacío si no hay errores)
    }

    /**
     * Guarda un nuevo domicilio y retorna el ID generado.
     */
    public function guardar($calle, $numero, $codigoPostal, $localidadId, $piso = null, $departamento = null): int
    {
        $this->domicilioModel->insert([
            'calle'         => $calle,
            'numero'        => $numero,
            'piso'          => $piso,
            'departamento'  => $departamento,
            'codigo_postal' => $codigoPostal,
            'localidad_id'  => $localidadId,
        ]);

        return $this->domicilioModel->getInsertID();
    }
}