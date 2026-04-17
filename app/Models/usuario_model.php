<?php

namespace App\Models;
use CodeIgniter\Model;

class usuario_model extends Model
{
    protected $table      = 'usuario';
    protected $primaryKey = 'id_usuario';

    protected $useAutoIncrement = true;

    protected $returnType       = 'array';
    protected $useSoftDeletes = false;

    // Agregados dni, celular y domicilio_id aquí:
    protected $allowedFields = [
        'nombre_usuario', 
        'apellido_usuario', 
        'usuario', 
        'contraseña_usuario', 
        'perfil_id', 
        'estado_usuario',
        'dni',
        'celular',
        'domicilio_id'
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // ... resto de tu configuración (Validations, Callbacks, etc.)
}