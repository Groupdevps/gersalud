<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medico extends Model
{
	protected $table='medicos';
	protected $fillable=['id','nitcentro','nombre','apellido','User_id','cc','telefono','tarjeta_p','roll'];
   

   public function User(){
   	return $this->belongsTo('App\User','User_id');
   }

   public function espe_medico(){
   	return $this->belongsToMany('Apps\espe_medico','cc_doctor');
   }

   public function agenda_medica(){
   	return $this->belongsToMany('App\agenda_medica','cc');
   }
}
