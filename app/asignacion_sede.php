<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class asignacion_sede extends Model
{
    protected $table='asignacion_sedes';
    protected $fillable=['id_profesional','fecha','sede'];
}
