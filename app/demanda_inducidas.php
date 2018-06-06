<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class demanda_inducidas extends Model
{
    protected $table='demanda_inducidas';
    protected $fillable=['programacion','cantidad','hora','duracion'];
}
