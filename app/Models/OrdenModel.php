<?php

namespace App\Models;

use CodeIgniter\Model;

class OrdenModel extends Model
{
    protected $table = 'ordenes';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'estado',
        'observaciones',
        'fechaIngreso',
        'fechaSalida',
        'dispositivo_id',
    ];

}