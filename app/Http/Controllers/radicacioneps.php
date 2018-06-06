<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\radicacionepss;

class radicacioneps extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlte::layouts.Adminil.proveedores.radicacioneps');
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
        $newradicado = new radicacionepss;
        $newradicado->eps=$request->datos[0]['value'];
        $newradicado->nit=$request->datos[1]['value'];
        $newradicado->nombre=$request->datos[2]['value'];
        $newradicado->tipo_dc=$request->datos[3]['value'];
        $newradicado->cc=$request->datos[4]['value'];
        $newradicado->asunto=$request->datos[5]['value'];
        $newradicado->descripcion=$request->datos[6]['value'];
        $newradicado->observacion=$request->datos[7]['value'];
        $newradicado->radicado=$request->datos[8]['value'];
        $newradicado->save();
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
