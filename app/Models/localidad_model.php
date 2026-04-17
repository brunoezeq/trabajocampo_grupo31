<?php

namespace App\Models;

use CodeIgniter\Model;

class Localidad_model extends Model
{
    protected $table      = 'localidad';
    protected $primaryKey = 'id_localidad';
    protected $allowedFields = ['nombre_localidad', 'provincia_id'];
}