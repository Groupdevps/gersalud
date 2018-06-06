<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pro_proce extends Model
{
	protected $table='pro_proces';
	protected $fillable=['id_pro','id_proce'];
    
    public function proveedor(){
    	return $this->belongsTo('App\proveedor','id_pro');
    }
    public function procedimiento(){
    	return $this->belongsTo('App\procedimiento','id_proce');
    }
}
