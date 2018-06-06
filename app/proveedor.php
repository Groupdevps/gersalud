<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
	protected $table='proveedores';
	protected $fillable=['nit','Razon_social','direccion','User_id','tipo_pro'];

	public function provee_centro(){
		return $this->belongsToMany('App\provee_centro','nit');
	}
    
    public function user(){
    	return $this->belongsTo('App\user','User_id');
    }

    public function pro_proce(){
    	return $this->belongsToMany('App\pro_proce','tipo_pro');
    }

    public function pro_medicamento(){
        return $this->belongsToMany('App\pro_medicamento','nit');
    }

}
