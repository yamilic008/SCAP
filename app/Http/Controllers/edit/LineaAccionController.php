<?php

namespace App\Http\Controllers\edit;

use App\Prioridad;
use App\LineaAccion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LineaAccionController extends Controller
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
            /*$accion = LineaAccion::find(1);

            return $accion->prioridad;*/
            $accion = LineaAccion::all();
            return view('editor.lineaAccion.lineaAccion',compact('accion'));
          
        }

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
        $prioridad = Prioridad::all();
        $linea = new LineaAccion;
        return view('editor.lineaAccion.crear', compact( 'linea','prioridad' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $accion = new LineaAccion;
        $accion-> clave = $request->clave;
        $accion-> nombre = $request->nombre;
        $accion-> prioridad_id = $request->prioridad;
        $accion->save();

        return Redirect('accion');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LineaAccion  $lineaAccion
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LineaAccion  $lineaAccion
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $prioridad = Prioridad::all();
        $users = LineaAccion::find($id);
        return view('editor.lineaAccion.edita',compact('users','prioridad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LineaAccion  $lineaAccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $accion = LineaAccion::find($id);
        $accion-> clave = $request->clave;
        $accion-> nombre = $request->nombre;
        $accion-> prioridad_id = $request->prioridad;
        $accion->save();

        return Redirect('accion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LineaAccion  $lineaAccion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = LineaAccion::find($id);
        $users->delete($id);

        return Redirect('accion');
    }
}
