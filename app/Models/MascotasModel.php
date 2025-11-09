<?php

namespace App\Models;

use CodeIgniter\Model;

class MascotasModel extends Model
{
    protected $table = 'mascotas';
    protected $primaryKey = 'id_animal';
    protected $useAutoIncrement = true;

    protected $allowedFields = [
        'nombre',
        'raza',
        'especie',
        'vacunas',
        'esterilizado',
        'edad',
        'estado_disponibilidad'
    ];
}
