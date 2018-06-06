<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\incapacidads;

class incapacidad extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlte::layouts.Adminil.admisiones.incapacidad');
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
        $newincapacidad = new incapacidads();
        $newincapacidad->fechainc=$request->datos[0]['value'];
        $newincapacidad->entidad=$request->datos[1]['value'];
        $newincapacidad->code=$request->datos[2]['value'];
        $newincapacidad->tipo_dc=$request->datos[3]['value'];
        $newincapacidad->direccion=$request->datos[4]['value'];
        $newincapacidad->tel=$request->datos[5]['value'];
        $newincapacidad->cc=$request->datos[6]['value'];
        $newincapacidad->municipio=$request->datos[7]['value'];
        $newincapacidad->cel=$request->datos[8]['value'];
        $newincapacidad->fechanac=$request->datos[9]['value'];
        $newincapacidad->depart=$request->datos[10]['value'];
        $newincapacidad->email=$request->datos[11]['value'];
        $newincapacidad->tipo_tra=$request->datos[12]['value'];
        $newincapacidad->regimen=$request->datos[13]['value'];
        $newincapacidad->origen=$request->datos[14]['value'];
        $newincapacidad->motivo=$request->datos[15]['value'];
        $newincapacidad->diagnostico=$request->datos[16]['value'];
        $newincapacidad->fecin=$request->datos[17]['value'];
        $newincapacidad->ubipac=$request->datos[18]['value'];
        $newincapacidad->fecfinc=$request->datos[19]['value'];
        $newincapacidad->diainc=$request->datos[20]['value'];
        $newincapacidad->nombre=$request->datos[21]['value'];
        $newincapacidad->dir_ips=$request->datos[22]['value'];
        $newincapacidad->cargo=$request->datos[23]['value'];
        $newincapacidad->tel1=$request->datos[24]['value'];
        $newincapacidad->ips_pre=$request->datos[25]['value'];
        $newincapacidad->observacion=$request->datos[26]['value'];
        $newincapacidad->save();
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
