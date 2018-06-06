<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicamento extends Model
{
	protected $table='medicamentos';
	protected $fillable=['codigo_atc','descripcion_atc','principio_activo','concentracion','forma_farmaceutica','aclaracion'];
    
    public function pro_medicamento(){
    	return $this->belongsToMany('App\pro_medicamento','codigo_atc');
    } 
}
