<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class planilla_cppyps extends Model
{
    protected $table='planilla_cppyps';
    protected $fillable=['roll','numero_atencion','numero_ingreso'];
}
