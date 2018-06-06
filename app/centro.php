<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class centro extends Model
{
	protected $table='centros';
	protected $fillable=['nombre','email','celular','ubicacion','nit','nivel','direccion','nombreContacto','telefonoContacto','id_centro'];
    protected $appends=['medicos'];
    
    public function users(){
    	return $this->belongsTo('App\User','User_id');
    }
	
	public function centro_pabell(){
		return $this->belongsToMany('App\centro_pabell','nit');
	}

	public function provee_centro(){
		return $this->belongsToMany('App\provee_centro','nit');
	}

	public function personal_admint(){
		return $this->belongsToMany('App\personal_admint','nit');
	}

    public function  getMedicosAttribute()
    {
        $medicoscentro=collect();
        $medicos=medico::where('nitcentro',$this->nit)->get();

        $medicoscentro->push([

            'medicoscentro'=>$medicos

        ]);
        return $medicos;
    }
}

