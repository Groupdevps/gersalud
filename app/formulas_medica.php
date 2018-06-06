<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class formulas_medica extends Model
{
    protected $table='formulas_medicas';
    protected $fillable=['nombre','cc','eps','telefono','direccion','n.atencion','diagnostico','tratamiento','medicamento'];
}
