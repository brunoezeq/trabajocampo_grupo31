<?php

namespace App\Models;

use CodeIgniter\Model;

class provincia_model extends Model
{
    protected $table      = 'provincia';
    protected $primaryKey = 'id_provincia';
    protected $allowedFields = ['nombre_provincia'];
}