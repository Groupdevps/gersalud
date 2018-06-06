<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agenda_medica extends Model
{
    protected $table='agenda_medicas';
    protected $fillable=['id','id_medico','id_centro','fecha_in','fecha_out','id_cuarto'];
    //

    public function medico(){
    	return $this->belongsToMany('App\medico','id_medico')
    }

    public function centro(){
    	return $this->belongsToMany('App\centro','id_centro');
    }

    public function pabellon(){
    	return $this->belongsToMany('App\pabellon','id_cuarto');
    }
}

