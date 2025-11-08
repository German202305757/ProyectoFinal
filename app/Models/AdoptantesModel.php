<?php

namespace App\Models;

use CodeIgniter\Model;

class AdoptantesModel extends Model
{
    protected $table         = 'adoptante';
    protected $primaryKey = 'id_adoptante';
    protected $allowedFields = [
        'id_adoptante', 'nombre', 'apellido', 'edad', 'dpi', 'telefono', 'correo', 'direccion'
    ];
    // protected $returnType    = \App\Entities\User::class;
    // protected $useTimestamps = true;
}