<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class procedimiento extends Model
{
	protected $table='procedimientos';
	protected $fillable=['id','cups','descripcion','nivel','aclaracion'];
    
    public function pro_proce(){
    	return $this->belongsToMany('App\pro_proce','id');
    }
}
