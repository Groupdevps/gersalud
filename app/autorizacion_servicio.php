<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class autorizacion_servicio extends Model
{
    protected $table='autorizacion_servicios';
    protected $fillable=['n_servicio','fecha_exp','eps','nit','codigo','tel','direccion','municipio','beneficiario','fecha_nac','edad','n_sisben','tipo_dc','cc','carnet','ficha','contrato','direccion1','municipio1','telefono','modalidad','f_inicio','f_salida','codigo1','descripcion','nivel','servicio','especialidad','ambito','ubi_pac','codigo2','descripcion1','cantidad','valido','o_solicitud','observacion','numero','f_medico','ips','persona','telefono1'];
}
