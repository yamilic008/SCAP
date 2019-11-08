<?php

namespace App\Http\Controllers\edit;

use App\Area;
use App\Gestion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AreaController extends Controller
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
            $dato = Area::all();
            /*return 'hola';*/
            return view('editor.area.index',compact('dato'));
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
        $gestion = Gestion::all();
        $dato = new Area;
        return view('editor.area.crear', compact( 'dato','gestion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dato = new Area;
        $dato-> nombre = $request->nombre;
        $dato-> gestion_id = $request->gestion;
        $dato->save();

        return Redirect('area');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function show(Area $area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gestion = Gestion::all();
        $dato = Area::find($id);
        return view('editor.area.edita', compact( 'dato','gestion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dato = Area::find($id);
        $dato-> nombre = $request->nombre;
        $dato-> gestion_id = $request->gestion;
        $dato->save();

        return Redirect('area');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dato = Area::find($id);
        $dato->delete($id);
        return redirect('area'); 
    }
}
