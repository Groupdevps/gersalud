<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class administracions extends Model
{
    //
    protected $table="administracion";
    protected $fillable=['Nombre','Apellido','CC','Telefono','Celular','Email','roll','User_id'];

    public function users(){
        return $this->belongsTo('App\User','User_id');
    }
}
