<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class provee_centro extends Model
{
	protected $table='provee_centros';
	protected $fillable=['nit_pro','nit_centro','fecha'];
    
    public function proveedor(){
    	return $this->belongsTo('App\proveedor','nit_pro');
    }
    public function centro(){
    	return $this->belongsTo('App\centro','nit_centro');
    }
}
