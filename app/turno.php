<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class turno extends Model
{
    protected $table='turnos';
    protected $fillable=['id_turno','idagenda','horain','horafin','estado','idpaciente'];
}
