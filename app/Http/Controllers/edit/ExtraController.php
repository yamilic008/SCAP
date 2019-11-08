<?php

namespace App\Http\Controllers\edit;

use App\User;
use App\Extra;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ExtraController extends Controller
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
             //$ids = ActAcad::find($id);
             //return 'id';
             $dato = Extra::all();
             $user = User::all();
             /*$total = ActAcad::where('user_id','=', $idusuario)->sum('total');*/
             return view('editor.extra.index',compact('dato','user'));
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
        $dato = new Extra;
        $dato-> user_id = $request->user_id;
        $dato-> reporte = $request->reporte;
        $dato->save();

        toast('Registro agregado!','success','top-right');
        return redirect()->route ('extra.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function show(Extra $extra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function edit(Extra $extra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dato = Extra::find($id);
        $dato-> user_id = $request->user_id;
        $dato-> reporte = $request->reporte;
        $dato->save();

        Alert::toast('Registro se ha Modificado!', 'success', 'top-right');
        return redirect()->route ('extra.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $dato = Extra::find($id);
         $dato->delete($id);

         alert()->success('Borrado!','El Registro ha sido borrado');

          return redirect()->route ('extra.index');
    }
}
