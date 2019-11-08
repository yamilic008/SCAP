<?php

namespace App\Http\Controllers\edit;

use App\Ciclo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CicloController extends Controller
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
            $dato = Ciclo::all();
            /*return 'hola';*/
            return view('editor.ciclo.index',compact('dato'));
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
        return view('editor.ciclo.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dato = new Ciclo;
        $dato-> ciclo = $request->name;
        $dato->save();
        
        
        return Redirect('ciclo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ciclo  $ciclo
     * @return \Illuminate\Http\Response
     */
    public function show(Ciclo $ciclo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ciclo  $ciclo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dato = Ciclo::find($id);
        return view('editor.ciclo.edita',compact('dato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ciclo  $ciclo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dato = Ciclo::find($id);
        $dato->ciclo = $request->name;
        $dato->save();

        return redirect('ciclo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ciclo  $ciclo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dato = Ciclo::find($id);
        $dato->delete($id);

        return redirect('ciclo'); 
    }
}
