<?php

namespace App\Models;

use CodeIgniter\Model;

class SolicitudesModel extends Model
{
    protected $table = 'solicitudes';
    protected $primaryKey = 'id_solicitud';
    protected $useAutoIncrement = true;


    protected $allowedFields = [
        'id_adoptante',
        'id_animal',
        'estado_solicitud',
        'fecha_solicitud',
        'comentario'
    ];
}
