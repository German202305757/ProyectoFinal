<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table         = 'usuarios';
    protected $primaryKey  ='id_usuario'; 
    protected $allowedFields = [
        'id_usuario', 'usuario','contraseña', 'rol','id_adoptante','tipo_usuario'
    ];
    //protected $returnType    = \App\Entities\User::class;
    //protected $useTimestamps = true;
}