<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    protected $table='pacientes';
    protected $fillable=['name','name1','lastname','lastname1','cc','tipo_dc','sexo','telefono','telefono1','email','direccion','fecha_nac','edad','zona','barrio','ocupacion','name2','lastname2','cc1','tipo_dc1','name3','lastname3','cc2','tipo_dc2','eps','contrato','servicio','nivel_socioeconomico','cuota_moderadora'];
}
