<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model

{
    protected $table         = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = [
        'id_usuario','usuario', 'contraseña', 'rol', 'id_adoptante'
    ];
    // protected $returnType    = \App\Entities\User::class;
    // protected $useTimestamps = true;
}