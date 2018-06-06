<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\agenda;
use Carbon\Carbon;
use App\turno;


class crear_agenda extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlte::layouts.Adminil.admisiones.crear_agenda');
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
        $newagenda=new agenda();
        $newagenda->fecha=$request->datos[0]['value'];
        $newagenda->hora_in=$request->datos[1]['value'];
        $newagenda->hora_out=$request->datos[2]['value'];
        $newagenda->User_id=$request->iddoctor;
        $newagenda->sede=$request->datos[4]['value'];
        $newagenda->save();

        $hora=$request->datos[1]['value'];
        $hora1 = Carbon::createFromFormat('H:i', $hora);
        $horaaux = Carbon::createFromFormat('H:i', $hora);
        $horafin=$request->datos[2]['value'];
        $hora2 = Carbon::createFromFormat('H:i', $horafin);
        $diffhour=$hora1->diffInMinutes($hora2, false);
        for ($i = 1; $i <= $diffhour/20; $i++) {

            $nuevoTurno=new turno();
            $nuevoTurno->idagenda=$newagenda->id;

            $nuevoTurno->horain=$hora1->toDateTimeString();

            $nuevoTurno->horafin=$hora1->addMinutes(20);
            $nuevoTurno->estado=false;
            $nuevoTurno->idpaciente=0;
            $nuevoTurno->save();

            //echo "Turno numero: ".$i. "Hora inicio: ". $hora1->toDateTimeString()." hora final: ".$hora1->addMinute(20)."<br>";
        }





        
        /*

        */

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
