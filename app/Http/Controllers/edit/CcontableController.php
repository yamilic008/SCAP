<?php

namespace App\Http\Controllers\edit;

use App\Cuenta;
use App\Seccion;
use App\Ccontable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CcontableController extends Controller
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
            $dato = Ccontable::all();
            /*return 'hola';*/
            return view('editor.ccontable.index',compact('dato'));
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
        $seccion = Seccion::all();
        $cuenta = DB::table('cuentas')
                ->orderBy('nombre', 'asc')
                ->get();
        $dato = new Ccontable;
        return view('editor.ccontable.crear', compact( 'dato','seccion','cuenta' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dato = new Ccontable;
        $dato-> CuentaContable = $request->CuentaContable;
        $dato-> seccions_id = $request->seccion;
        $dato-> cuentas_id = $request->cuenta;
        $dato->save();

        return Redirect('ccontable');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ccontable  $ccontable
     * @return \Illuminate\Http\Response
     */
    public function show(ccontable $ccontable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ccontable  $ccontable
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $seccions = Seccion::all();
        $cuentas = Cuenta::all();
        $dato = Ccontable::find($id);
        return view('editor.ccontable.edita',compact('dato','cuentas','seccions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ccontable  $ccontable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $dato = Ccontable::find($id);
        $dato-> CuentaContable = $request->ccontable;
        $dato-> seccions_id = $request->seccion;
        $dato-> cuentas_id = $request->cuenta;
        $dato->save();

        return redirect('ccontable');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ccontable  $ccontable
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $dato = Ccontable::find($id);
        $dato->delete($id);
        return redirect('ccontable'); 
    }
    public function copy($id)
    {

        $seccions = Seccion::all();
        $cuentas = Cuenta::all();
        $dato = Ccontable::find($id);
        

        
       
        return view('editor.ccontable.copy', compact( 'dato','cuentas','seccions' ));   
       

    }
}
