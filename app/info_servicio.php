<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class info_servicio extends Model
{
    protected $table='info_servicios';
    protected $fillable=['servicio','nivel_socioeconomico','cuota_moderadora'];
}
