<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\autorizacion_servicio;

class autorizacion_eps extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlte::layouts.escritorios.autorizacion_eps');
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
        $newautorizacions = new autorizacion_servicio();
        $newautorizacions->n_servicio=$request->datos[0]['value'];
        $newautorizacions->fecha_exp=$request->datos[1]['value'];
        $newautorizacions->eps=$request->datos[2]['value'];
        $newautorizacions->nit=$request->datos[3]['value'];
        $newautorizacions->codigo=$request->datos[4]['value'];
        $newautorizacions->tel=$request->datos[5]['value'];
        $newautorizacions->direccion=$request->datos[6]['value'];
        $newautorizacions->municipio=$request->datos[7]['value'];
        $newautorizacions->beneficiario=$request->datos[8]['value'];
        $newautorizacions->fecha_nac=$request->datos[9]['value'];
        $newautorizacions->edad=$request->datos[10]['value'];
        $newautorizacions->n_sisben=$request->datos[11]['value'];
        $newautorizacions->tipo_dc=$request->datos[12]['value'];
        $newautorizacions->cc=$request->datos[13]['value'];
        $newautorizacions->carnet=$request->datos[14]['value'];
        $newautorizacions->ficha=$request->datos[15]['value'];
        $newautorizacions->contrato=$request->datos[16]['value'];
        $newautorizacions->direccion1=$request->datos[17]['value'];
        $newautorizacions->municipio1=$request->datos[18]['value'];
        $newautorizacions->telefono=$request->datos[19]['value'];
        $newautorizacions->modalidad=$request->datos[20]['value'];
        $newautorizacions->f_inicio=$request->datos[21]['value'];
        $newautorizacions->f_salida=$request->datos[22]['value'];
        $newautorizacions->codigo1=$request->datos[23]['value'];
        $newautorizacions->descripcion=$request->datos[24]['value'];
        $newautorizacions->nivel=$request->datos[25]['value'];
        $newautorizacions->servicio=$request->datos[26]['value'];
        $newautorizacions->especialidad=$request->datos[27]['value'];
        $newautorizacions->ambito=$request->datos[28]['value'];
        $newautorizacions->ubi_pac=$request->datos[29]['value'];
        $newautorizacions->codigo2=$request->datos[30]['value'];
        $newautorizacions->descripcion1=$request->datos[31]['value'];
        $newautorizacions->cantidad=$request->datos[32]['value'];
        $newautorizacions->valido=$request->datos[33]['value'];
        $newautorizacions->o_solicitud=$request->datos[34]['value'];
        $newautorizacions->observacion=$request->datos[35]['value'];
        $newautorizacions->numero=$request->datos[36]['value'];
        $newautorizacions->f_medico=$request->datos[37]['value'];
        $newautorizacions->ips=$request->datos[38]['value'];
        $newautorizacions->persona=$request->datos[39]['value'];
        $newautorizacions->telefono1=$request->datos[40]['value'];
        $newautorizacions->save();
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
