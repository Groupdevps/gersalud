<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class confirmacion_cita extends Model
{
    protected $table='confirmacion_citas';
    protected $fillable=['paciente','medico','fecha'];
}
