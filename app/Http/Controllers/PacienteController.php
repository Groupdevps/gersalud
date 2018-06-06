<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Paciente;
use  App\ingreso;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buspac=Paciente::where('Dni',$request->q)->first();

            if ($buspac==null){
                return view('adminlte::layouts.Paciente.NewPaciente',['estado'=>'Paciente no se  enceuntra resgistrado, por favor registre al paciente']);
            }else{
               return view('adminlte::layouts.Paciente.Pacientes',['estado'=>'Paciente Encontrado','paciente'=>$buspac]);
            }

    }
      //dd($buspac);

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminlte::layouts.Paciente.NewPaciente');
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
        $p=new Paciente();
        $p->Nombre=$request->Nombre;
        $p->Apellido=$request->Apellido;
        $p->TipoIdentificacion=$request->TipoIdentificacion;
        $p->Dni=$request->Dni;
        $p->Direccion=$request->Direccion;
        $p->Sexo=$request->Sexo;
        $p->GrupoSan=$request->GrupoSan;
        $p->Fechanacimiento=$request->Fechanacimiento;
        $p->Ocupacion=$request->ocupacion;
        $p->NombreAcom=$request->nombreconta+" "+$request->apellidoconta;
        $p->TelefonoAcom =$request->telefonoconta;
        $p->NombreResp=$request->apellidoconta;
        $p->TelefonoResp=$request->celularconta;
        //$p->MotivoConsulta=$request->MotivoConsulta;
        $p->Regimen='subsidiado';//$request->Regimen;
        $p->TipoVinculacion='Cabeza de Familia';
        $p->Aseguradora =$request->Aseguradora;
        $p->estrato=$request->estrato;
      //  $p->barrio=$request->barrio;
        $p->parentesco=$request->parentesco;
        $p->departamento=$request->departamento;
        $p->Ciudad=$request->ciudad;
        $p->save();
        return view('adminlte::home');




        //($request->paciente_id, $request->area, $request->estado,
    }
    /**);
        dd($request);
     $request->id, $request->paciente_id, $request->area, $request->estado, $request->Nombre, $request->Apellido, $request->TipoIdentificacion, $request->Dni, $request->Direccion, $request->Sexo, $request->GrupoSan, $request->Fechanacimiento, $request->Ocupacion, $request->NombreAcom, $request->TelefonoAcom, $request->NombreResp, $request->TelefonoResp, $request->MotivoConsulta, $request->Regimen, $request->TipoVinculacion, $request->Aseguradora, $request->estrato, $request->barrio, $request->parentesco, $request->departamento, $request->Ciudad
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Ingreso(Request $request )
    {


    }
    public function show($id)
    {
        $buspac=Paciente::where('Dni',$request->q)->first();

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
