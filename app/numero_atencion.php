<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class numero_atencion extends Model
{
    protected $table='numero_atencions';
    protected $fillable=['id_modulo','nombre_paciente','id_servicio'];
}
