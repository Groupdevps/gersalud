<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\formulas_medica;

class formulasmedicas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlte::layouts.PNC.medico.formulasmedicas');
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
        $newformula = new formulas_medica();
        $newformula->nombre=$request->datos[0]['value'];
        $newformula->cc=$request->datos[1]['value'];
        $newformula->eps=$request->datos[2]['value'];
        $newformula->telefono=$request->datos[3]['value'];
        $newformula->direccion=$request->datos[4]['value'];
        $newformula->n_atencion=$request->datos[5]['value'];
        $newformula->diagnostico=$request->datos[6]['value'];
        $newformula->tratamiento=$request->datos[7]['value'];
        $newformula->medicamento=$request->datos[8]['value'];
        $newformula->save();
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
