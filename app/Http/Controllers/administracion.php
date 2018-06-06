<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\administracions;

class administracion extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlte::layouts.Adminil.centros.administracion');
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
        $newadministracion = new administracions();
        $newadministracion->Nombre=$request->datos[0]['value'];
        $newadministracion->Apellido=$request->datos[1]['value'];
        $newadministracion->CC=$request->datos[2]['value'];
        $newadministracion->Telefono=$request->datos[3]['value'];
        $newadministracion->Celular=$request->datos[4]['value'];
        $newadministracion->Email=$request->datos[5]['value'];
        $newadministracion->roll=$request->datos[6]['value'];
        $newadministracion->User_id=$request->datos[7]['value'];
        $newadministracion->save();
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
