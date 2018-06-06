<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class radicacion_epss extends Model
{
    protected $table='radicacion_eps';
    protected $fillable=['eps','nit','radicacion','nombre','tipo_dc','cc'];
}
