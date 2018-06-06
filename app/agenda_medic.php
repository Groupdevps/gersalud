<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agenda_medic extends Model
{
    protected $table='agenda_medics';
    protected $fillable=['doctor','fecha','sede','hora_inicial','hora_final'];
}
