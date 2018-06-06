<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;
use App\User;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('adminlte::layouts.proveedor.proveedor');//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proveedor=new proveedor($request->all());
        //'password','type','Nitempresa'
            $Userp=new User();
            $Userp->name=$request->nombreconta;
            $Userp->email=$request->correoconta;
            $Userp->password=bcrypt($request->correoconta);
            $Userp->type='Proveedor';
            $Userp->Nitempresa=$request->nitproveedor;
            $Userp->save();
           // dd($Userp);
            $Userp= User::where('email', $request->correoconta)->first();
            $proveedor->User_id=$Userp[0]->id;
            $proveedor->save();
            $estado="Proveedor Registrado Correctamente";
            return view('adminlte::layouts.Centro.',['estado'=>$estado]);//
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
