<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cuarto extends Model
{
	protected $table='cuartos';
	protected $fillable=['id','nombre','id_pabell'];
    
    public function pabellon(){
    	return $this->belongsTo('App\pabellon','id_pabell');
    }
}
