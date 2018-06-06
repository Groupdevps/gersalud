<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\ingreso;
use  App\Paciente;

class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes=Paciente::all();
                $ingresos=ingreso::all();





//dd($estado);
        //
    return view('adminlte::layouts.Paciente.salaespera',["pacientes"=>$pacientes,"ingreso"=>$ingresos]);

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

        $I=new ingreso();
        $I->paciente_id=$request->Paciente_id;
        $I->area=$request->area;
        $I->estado=$request->estado;
        $I->MotivoConsulta=$request->MotivoConsulta;
        $I->save();
        return view('adminlte::home');

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
        $buspac=Paciente::where('id',$id)->first();

        return view('adminlte::layouts.Medico.EvolucionPacientes',['estado'=>'Paciente Encontrado','paciente'=>$buspac]);

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
