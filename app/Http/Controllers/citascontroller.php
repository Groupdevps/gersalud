<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detalle;

class citascontroller extends Controller
{
    //
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {

        $tipocita= detalle::where('nav_id', 10)->get();
    //=detalle::all();

        return view('adminlte::layouts.cita.cita',['tipocita'=>$tipocita]);
    }
}
