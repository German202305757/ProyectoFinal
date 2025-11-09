<?php

namespace App\Models;

use CodeIgniter\Model;

class CitasModel extends Model
{
    protected $table = 'citas';
    protected $primaryKey = 'id_cita';
    protected $useAutoIncrement = true;


    protected $allowedFields = [
        'id_solicitud',
        'fecha_cita',
        'hora_cita',
        'tipo_cita',
        'comentario'
    ];
}
