<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class extra_cupo extends Model
{
    protected $table='extra_cupos';
    protected $fillable=['id_profesional','fecha','hora'];
}
