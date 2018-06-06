<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pncController extends Controller
{
    public function  index(){
    	return view('adminlte::layouts.PNC.agendamedica');
    }
}
