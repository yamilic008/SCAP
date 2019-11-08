<?php

namespace App\Http\Controllers\edit;

use App\Cuenta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CuentaController extends Controller
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
            $dato = Cuenta::all();
            /*return 'hola';*/
            return view('editor.cuenta.index',compact('dato'));
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
        $dato = new Cuenta;
        return view('editor.cuenta.crear', compact( 'dato' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dato = new Cuenta;
        $dato-> nombre = $request->nombre;
        $dato-> descripcion = $request->descripcion;
        $dato->save();

        return Redirect('cuenta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $dato = Cuenta::find($id);
        return view('editor.cuenta.edita',compact('dato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $dato = Cuenta::find($id);
        $dato-> nombre = $request->nombre;
        $dato-> descripcion = $request->descripcion;
        $dato->save();

        return redirect('cuenta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $dato = cuenta::find($id);
        $dato->delete($id);
        return redirect('cuenta'); 
    }
}
