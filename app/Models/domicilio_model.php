<?php

namespace App\Models;

use CodeIgniter\Model;

class Domicilio_model extends Model
{
    protected $table      = 'domicilio';
    protected $primaryKey = 'id_domicilio';
    
   
    protected $allowedFields = [
        'calle', 
        'numero', 
        'piso', 
        'departamento', 
        'codigo_postal', 
        'localidad_id'
    ];
}