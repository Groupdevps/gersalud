<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personal_admint extends Model
{
	protected $table='personal_admins';
	protected $fillable= ['nombre','apellido','direccion','cc','cargo_id','id_centro','email','telefono','User_id'];
    
    public function user(){
    	return $this->belongsTo('App\user','User_id');
    }

    public function centro(){
    	return $this->belongsTo('App\centro','id_centro');
    }
}
