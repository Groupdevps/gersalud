<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nav extends Model
{
    protected $table="nav";
    protected $fillable=['categoria','hrc'];
    public function detallenav()
    {
        return $this->hasmany('App\detalle');
    }
}
