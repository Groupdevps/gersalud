<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orden_laboratorio;

class ordenlaboratorio extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlte::layouts.PNC.medico.ordenlaboratorio');
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
        $newordenlab = new orden_laboratorio();
        $newordenlab->nombre=$requet->datos[0]['value'];
        $newordenlab->cc=$requet->datos[1]['value'];
        $newordenlab->eps=$requet->datos[2]['value'];
        $newordenlab->telefono=$requet->datos[3]['value'];
        $newordenlab->direccion=$requet->datos[4]['value'];
        $newordenlab->n_atencion=$requet->datos[5]['value'];
        $newordenlab->diagnostico=$requet->datos[6]['value'];
        $newordenlab->fecha=$requet->datos[7]['value'];
        $newordenlab->ordenes=$requet->datos[8]['value'];
        $newordenlab->save();
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
