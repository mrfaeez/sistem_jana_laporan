<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DrugOrder extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'drug_orders';
    protected $primaryKey = 'patient_code';
    protected $keyType = 'string';
}
