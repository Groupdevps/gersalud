<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class espe_medico extends Model
{
	protected $table='espemedicos';
	protected $fillable=['id','cc_doctor','id_esp','fecha'];
    
    public function medico(){
    	return $this->belongsToMany('App\medico','cc_doctor','cc','id');
    }

    public function especialidad(){
    	return $this->belongsToMany('App\especialidad','id')
    }
}
