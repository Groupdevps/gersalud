<?php

namespace App\Http\Controllers;
use App\User;
use App\paciente;
use Illuminate\Http\Request;

class ingreso_pacientes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlte::layouts.Adminil.admisiones.ingreso_pacientes');
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
        $newpaciente=new paciente();
        $newpaciente->cc=$request->datos[5]['value'];
        $newpaciente->name=$request->datos[1]['value'];
        $newpaciente->name1=$request->datos[2]['value'];
        $newpaciente->lastname=$request->datos[3]['value'];
        $newpaciente->lastname1=$request->datos[4]['value'];
        
        $newpaciente->tipo_dc=$request->datos[6]['value'];
        $newpaciente->sexo=$request->datos[7]['value'];
        $newpaciente->telefono=$request->datos[8]['value'];
        $newpaciente->telefono1=$request->datos[9]['value'];
        $newpaciente->email="no@no.com";
        $newpaciente->direccion=$request->datos[10]['value'];
        $newpaciente->fecha_nac=$request->datos[11]['value'];
        $newpaciente->edad=$request->datos[12]['value'];
        $newpaciente->zona=$request->datos[13]['value'];
        $newpaciente->barrio=$request->datos[14]['value'];
        $newpaciente->ocupacion=$request->datos[15]['value'];
        $newpaciente->name2=$request->datos[16]['value'];
        $newpaciente->lastname2=$request->datos[17]['value'];
        $newpaciente->cc1=$request->datos[18]['value'];
        $newpaciente->tipo_dc1=$request->datos[19]['value'];
        $newpaciente->name3=$request->datos[20]['value'];
        $newpaciente->lastname3=$request->datos[21]['value'];
        $newpaciente->cc2=$request->datos[22]['value'];
        $newpaciente->tipo_dc2=$request->datos[23]['value'];
        $newpaciente->eps=$request->datos[24]['value'];
        $newpaciente->contrato=$request->datos[25]['value'];
        $newpaciente->servicio=$request->datos[26]['value'];
        $newpaciente->nivel_socioeconomico=$request->datos[27]['value'];
        $newpaciente->cuota_moderadora=$request->datos[28]['value'];
        $newpaciente->save();

        


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //mostrar informacion
        $consultapaciente=paciente::where('cc',$request->cc)->get();
        return $consultapaciente;
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
