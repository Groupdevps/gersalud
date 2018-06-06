<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class radicacionepss extends Model
{
    protected $table='radicacionepss';
    protected $fillable=['eps','nit','nombre','tipo_dc','cc','asunto','descripcion','observacion','radicado'];
}
