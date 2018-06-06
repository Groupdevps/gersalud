<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agenda extends Model
{
    protected $table='crear_agendas';
    protected $fillable=['fecha','hora_in','hora_out','User_id','sede'];
}
