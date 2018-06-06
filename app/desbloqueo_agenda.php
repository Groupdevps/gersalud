<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class desbloqueo_agenda extends Model
{
    protected $table='desbloqueo_agendas';
    protected $fillable=['id_profesional','fecha','hora_inicio','hora_final'];
}
