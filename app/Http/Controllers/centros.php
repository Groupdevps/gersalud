<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use  App\centro;
use App\medico;
use App\personal_admint;
use Auth;
use App\agenda;
use App\turno;

class centros extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlte::layouts.Adminil.centros.centros');
        //funcion para listar  centros
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //funcion para  mostrar  formulario de  nuevo  centro
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //funcion para  guardar  (ruta  de ajax) post
        $centro = new centro();
        $centro->nombre=$request->datos[0]['value'];
        $centro->email=$request->datos[3]['value'];
        $centro->celular=$request->datos[2]['value'];
        $centro->ubicacion=$request->datos[4]['value'];
        $centro->nit=$request->datos[1]['value'];
        $centro->direccion=$request->datos[5]['value'];
        $centro->nombreContacto=$request->datos[6]['value'];
        $centro->telefonoContacto=$request->datos[7]['value'];
        $centro->save();

        //['name', 'email', 'password','type'];
        if($centro){
            $newuser=new User();
            $newuser->name=$centro->nombre;
            $newuser->email=$centro->email;
            $newuser->password=bcrypt($centro->nombre);
            $newuser->save();
        }


        /*
         * $table->increments('id');
            $table->string('nombre');
            $table->string('email');
            $table->integer('celular');
            $table->integer('nit')->unsigned()->nullable(false)->change();;
            $table->string('direccion',255);
            $table->string('nombreContacto');
            $table->integer('telefonoContacto');*/

        //$centro=new centro($request->all());
       // $centro->save();
      //  $estado="Centro Registrado Correctamente";
        //return view('adminlte::layouts.Centro.NewCentro',['estado'=>$estado]);//
        return $centro;
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //muestra  la  informacion de un centro especifico
        $centro=centro::where('nit',$id)->get();
            return $centro;


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //formulario  que  permite  modificar  los  datos 
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
        //recibe los datos  enviados  desde  el formulario de edit ruta  ajax
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // elimina  un centro  (ruta de  ajax)
    }

    public function  infocentro(){
        $userper=personal_admint::where('User_id',Auth::User()->id)->first();

        $centro=centro::where('nit',$userper->id_centro)->get();
        return $centro;

    }
    public function infoAgendaMedico(Request $request){
        $agenda=agenda::where('User_id',$request->id)->get();
        return $agenda;


    }
    public function infoTurnoAgenda(Request $request){
        $turnos=turno::where('idagenda',$request->id)->get();
        return $turnos;
    }

}
