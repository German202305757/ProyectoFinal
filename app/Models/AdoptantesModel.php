<?php

namespace App\Models;

use CodeIgniter\Model;

class AdoptantesModel extends Model
{
    protected $table         = 'adoptante';
    protected $primaryKey    = 'id_adoptante';
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'nombre',
        'apellido',
        'edad',
        'dpi',
        'telefono',
        'correo',
        'direccion'
    ];
}
