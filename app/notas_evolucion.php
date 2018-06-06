<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notas_evolucion extends Model
{
    protected $table='notas_evolucions';
    protected $fillable=['nombre','cc','diagnostico','observacion'];
}
