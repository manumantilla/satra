<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    //
    protected $fillable = [
        'vehiculo_id',
        'latitud',
        'longitud',
    ];
}
