<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
//use HomeController;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
         if(Auth::user()->hasRole('admin')) {
           return view('adminlte::home');
        }
        
        if(Auth::user()->hasRole('admicionista')){
          
        return  redirect('admicionista/escritorio');
        //view('adminlte::/escritorio');    
        }
        if(Auth::user()->hasRole('doctor')){
            return redirect('Medico/dashboard');
        }
    }
    //public function  getuser(Request) {
     //   $R=App\User::find();
     //   return $R;
    //}




}