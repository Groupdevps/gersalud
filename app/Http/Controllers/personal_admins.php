<?php

namespace App\Http\Controllers;

use App\personal_admint;
use Illuminate\Http\Request;

class personal_admins extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlte::layouts.Adminil.centros.personal_admins');
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
        $newpersonal=new personal_admint();
        $newpersonal->id_centro=$request->nit;
        $newpersonal->nombre=$request->datos[0]['value'];
        $newpersonal->apellido=$request->datos[1]['value'];
        $newpersonal->email=$request->datos[5]['value'];
        $newpersonal->cc=$request->datos[2]['value'];
        $newpersonal->cargo_id=$request->datos[2]['value'];
        $newpersonal->telefono=$request->datos[4]['value'];

        $newpersonal->save();
        if($newpersonal){
            $newuser=new User();
            $newuser->name=$newpersonal->nombre;
            $newuser->email=$newpersonal->email;
            $newuser->password=bcrypt($newpersonal->nombre);
            $newuser->save();
            $newuser->roles()->attach(6); // id only
        }


        $consultamedicos=personal_admint::where('nitcentro',$request->nit)->get();
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
