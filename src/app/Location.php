<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $primaryKey = 'patient_code';
    protected $keyType = 'string';
}
