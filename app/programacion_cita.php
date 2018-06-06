<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class programacion_cita extends Model
{
    protected $table='programacion_citas';
    protected $fillable=['servicios'];
}
