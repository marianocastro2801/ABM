<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    //aqui puedo poner una funcion inicio que me retorne el welcome por ahora no

      public function inicio(){
       
       $clientes=App\clientes::all();
       return view ('welcome',compact('clientes'));

    }

   

}
