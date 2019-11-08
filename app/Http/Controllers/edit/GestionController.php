<?php

namespace App\Http\Controllers\edit;


use App\Gestion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GestionController extends Controller
{
     public function index()
    {
      if(auth()->user()->hasRole('Editor'))
        {
	        $gestion = Gestion::all();
	        /*return 'hola';*/
	        return view('editor.gestion.gestion',compact('gestion'));
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
    	$gestion = new Gestion;
        return view('editor.gestion.crearGestion', compact( 'gestion' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $user = new Gestion;
        $user-> nombre = $request->name;
        $user->save();
        
        
        return Redirect('gestion');
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
    	$users = Gestion::find($id);
        return view('editor.gestion.editaGestion',compact('users'));
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
        $users = Gestion::find($id);
        $users->nombre = $request->name;
        $users->save();

        return redirect('gestion');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      	$users = gestion::find($id);
        $users->delete($id);
        return redirect('gestion'); 
    }
}
