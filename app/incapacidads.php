<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class incapacidads extends Model
{
    protected $table='incapacidads';
    protected $fillable=['fechainc','entidad','code','tipo_dc','direccion','tel','cc','municipio','cel','fechanac','depart','email','tipo_tra','regimen','origen','motivo','diagnostico','fecin','ubipac','fecfinc','diainc','nombre','dir_ips','cargo','tel1','ips_pre','observacion'];
}
