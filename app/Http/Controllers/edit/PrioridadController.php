<?php

namespace App\Http\Controllers\edit;
use App\Prioridad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PrioridadController extends Controller
{
    //
     public function index()
    {
    	if(auth()->user()->hasRole('Editor'))
        {
	        $prioridad = Prioridad::all();
	        /*return 'hola';*/
	        return view('editor.prioridad.Prioridad',compact('prioridad'));
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
    	$prioridad = new Prioridad;
        return view('editor.prioridad.crearPrioridad', compact( 'prioridad' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$prioridad = new Prioridad;
        $prioridad-> clave = $request->clave;
        $prioridad-> nombre = $request->nombre;
        $prioridad-> descripcion = $request->descripcion;
        $prioridad->save();

        return Redirect('prioridad');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      /* dd($request->all()); */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$dato = Prioridad::find($id);
        return view('editor.prioridad.editaPrioridad',compact('dato')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    	$prioridad = Prioridad::find($id);
        $prioridad-> clave = $request->clave;
        $prioridad-> nombre = $request->nombre;
        $prioridad-> descripcion = $request->descripcion;
        $prioridad->save();
        return redirect('prioridad');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	$users = Prioridad::find($id);
        $users->delete($id);
        return redirect('prioridad'); 
    }

}
