<?php

namespace App\Http\Controllers\edit;

use App\Cuenta;
use App\Concepto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConceptoController extends Controller
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
            $dato = Concepto::all();
            /*return 'hola';*/
            return view('editor.concepto.index',compact('dato'));
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
        $cuenta = Cuenta::all();
        $dato = new Concepto;
        return view('editor.concepto.crear', compact( 'dato','cuenta' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dato = new Concepto;
        $dato-> concepto = $request->concepto;
        $dato-> cuenta_id = $request->cuenta;
        $dato->save();

        return Redirect('concepto');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Concepto  $concepto
     * @return \Illuminate\Http\Response
     */
    public function show(Concepto $concepto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Concepto  $concepto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cuentas = Cuenta::all();
        $dato = Concepto::find($id);
        return view('editor.concepto.edita',compact('dato','cuentas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Concepto  $concepto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dato = Concepto::find($id);
        $dato-> concepto = $request->concepto;
        $dato-> cuenta_id = $request->cuenta;
        $dato->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Concepto  $concepto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dato = Concepto::find($id);
        $dato->delete($id);
        return redirect('concepto'); 
    }
}
