<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class centro_pabell extends Model
{
	protected $table='centro_pabells';
	protected $fillable=['id_pabe','nit_centro','fecha'];
    
    public function pabellon(){
    	return $this->belongsTo('App\pabellon','id_pabe');
    }

    public function centro(){
    	return $this->belongsTo('App\centro','nit_centro');
    }
}
