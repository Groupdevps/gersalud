<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ordenes_ambulatoria extends Model
{
    protected $table='ordenes_ambulatorias';
    protected $fillable=['nombre','cc','eps','telefono','direccion','n_atencion','diagnostico','especialidad','sustentacion','medicina_interna'];
}
