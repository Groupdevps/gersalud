<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ordenes_ambulatoria;
class ordenesambulatorias extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlte::layouts.PNC.medico.ordenesambulatorias');
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
        $neworden = new ordenes_ambulatoria();
        $neworden->nombre=$request->datos[0]['value'];
        $neworden->cc=$request->datos[1]['value'];
        $neworden->eps=$request->datos[2]['value'];
        $neworden->telefono=$request->datos[3]['value'];
        $neworden->direccion=$request->datos[4]['value'];
        $neworden->n_atencion=$request->datos[5]['value'];
        $neworden->diagnostico=$request->datos[6]['value'];
        $neworden->especialidad=$request->datos[7]['value'];
        $neworden->sustentacion=$request->datos[8]['value'];
        $neworden->medicina_interna=$request->datos[9]['value'];
        $neworden->save();

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
