<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $useAutoIncrement = true;


    protected $allowedFields = [
        'usuario',
        'contraseña',
        'rol',
        'id_adoptante',
        'tipo_usuario'
    ];
}
