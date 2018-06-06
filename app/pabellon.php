<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pabellon extends Model
{
	protected $table='pabellones';
	protected $fillable=['id','nombre'];
    
    public function agenda_medica(){
    	return $this->belongsToMany('App\agenda_medica','id');
    }
    public function cuarto(){
    	return $this->belongsToMany('App\cuarto','id');
    }
}
