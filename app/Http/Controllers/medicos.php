<?php

namespace App\Http\Controllers;

use App\medico;
use App\Role;
use App\User;
use Illuminate\Http\Request;


class medicos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlte::layouts.Adminil.newmedicos.medicos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $newmedico=new medico();
        $newmedico->nitcentro=$request->nit;
        $newmedico->nombre=$request->datos[0]['value'];
        $newmedico->apellido=$request->datos[1]['value'];
        $newmedico->email=$request->datos[2]['value'];
        $newmedico->cc=$request->datos[3]['value'];
        $newmedico->telefono=$request->datos[4]['value'];
        $newmedico->tarjeta_p=$request->datos[5]['value'];
        $newmedico->save();

        if($newmedico){
            $newuser=new User();
            $newuser->name=$newmedico->nombre;
            $newuser->email=$newmedico->email;
            $newuser->password=bcrypt($newmedico->nombre);
            $newuser->type='Medico';
            $newuser->save();

            $newuser->roles()->attach(2); // en esta  linea asigno  al  nuevo medico el  roll de  medico
        }

        $consultamedicos=medico::where('nitcentro',$request->nit)->get();
        return $consultamedicos;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
