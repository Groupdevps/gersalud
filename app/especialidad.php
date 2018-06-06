<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class especialidad extends Model
{
	protected $table='especialidades';
	protected $fillable=['id','nombre'];
    //

    public function espe_medico(){
    	return $this->belongsToMany('App\espe_medico','id_esp')
    }
}
