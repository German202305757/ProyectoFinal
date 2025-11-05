<?php

namespace App\Models;

use CodeIgniter\Model;

class CitasModel extends Model
{
    protected $table         = 'citas';
    protected $primaryKey ='id_cita';
    protected $allowedFields = [
        'id_cita', 'id_solicitud', 'fecha_cita', 'hora_cita', 'tipo_cita', 'comentario',
    ];
    //protected $returnType    = \App\Entities\User::class;
    //protected $useTimestamps = true;
}