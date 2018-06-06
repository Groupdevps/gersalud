<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle extends Model
{

     protected $table="detallenav";
    protected $fillable=['Nom','hrc','nav_id'];
     public function nav()
    {
        return $this->belongsTo('App\nav');
    }
}
