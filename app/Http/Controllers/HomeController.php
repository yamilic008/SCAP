<?php

namespace App\Http\Controllers;

use App\ActAcad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dato = ActAcad::all();

       // $dato = ajax($dato);
        /*$dato1=  Response::json($dato);*/
        

        return view('home',compact('dato'));
        
        /*return $dato;*/


    }
    public function ActAcad()
    {
         $dato = ActAcad::all();

        // $dato = ajax($dato);
         $dato1=  Response::json($dato);
        /* $dato1 = json_decode($dato);*/

         
         return $dato1;
    }
}
