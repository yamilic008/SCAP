<?php

namespace App\Http\Controllers\edit;

use App\Seccion;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SeccionController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       if(auth()->user()->hasRole('Editor'))
        {
            $dato = Seccion::all();
            /*return 'hola';*/
            return view('editor.seccion.seccion',compact('dato'));
    /*            return route('gestion')
    */  }

        else 
        {
            return view('home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dato = new Seccion;
        return view('editor.seccion.crear', compact( 'dato' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dato = new Seccion;
        $dato-> nombre = $request->nombre;
        $dato->save();

        return Redirect('seccion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function show(seccion $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\seccion  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dato = Seccion::find($id);
        return view('editor.seccion.edita',compact('dato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\seccion  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $prioridad = Seccion::find($id);
        $prioridad-> nombre = $request->nombre;
        $prioridad->save();

        return redirect('seccion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\seccion  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = Seccion::find($id);
        $users->delete($id);
        return redirect('seccion'); 
    }

   


    
}
