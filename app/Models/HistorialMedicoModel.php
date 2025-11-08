<?php

namespace App\Models;

use CodeIgniter\Model;

class HistorialMedicoModel extends Model
{
    protected $table         = 'historial_medico';
    protected $primaryKey = 'id_historial';
    protected $allowedFields = [
       'id_animal', 'vacunas_aplicadas','tratamiento','fecha_revision'
    ];
    //protected $returnType    = \App\Entities\User::class;
    //protected $useTimestamps = true;
}