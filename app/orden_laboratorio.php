<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orden_laboratorio extends Model
{
    protected $table='orden_laboratorios';
    protected $fillable=['nombre','cc','eps','telefono','direccion','n_atencion','diagnostico','fecha','ordenes'];
}
