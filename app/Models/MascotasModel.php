<?php

namespace App\Models;

use CodeIgniter\Model;

class MascotasModel extends Model
{
    protected $table         = 'mascotas';
    protected $primaryKey ='id_animal';
    protected $allowedFields = [
        'id_animal', 'nombre', 'raza', 'especie', 'vacunas', 'esterilizado', 'edad', 'estado_disponibilidad',
    ];
    //protected $returnType    = \App\Entities\User::class;
    //protected $useTimestamps = true;
}