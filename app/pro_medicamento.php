<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pro_medicamento extends Model
{
	protected $table='pro_medicamentos';
	protected $fillable=['id','nit_pro','codigo_atc'];
    
    public function proveedor(){
    	return $this->belongsTo('App\proveedor','nit_pro');
    }

    public function medicamento(){
    	return $this->belongsTo('App\medicamento','codigo_atc');
    }
}
