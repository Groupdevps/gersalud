<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class info_aseguradora extends Model
{
	protected $table='info_aseguradoras';
	protected $fillable=['eps','contrato'];
}
