<?php

namespace App\Http\Controllers\coment;

use App\Comentario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dato= Comentario::all();
        return view('coment.index',compact('dato'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idusuario = Auth::user()->id;
        $enviado = 0;
        return view('coment.crear',compact('idusuario','enviado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dato = new Comentario;
        $dato-> user_id = $request->user;
        $dato-> titulo = $request->titulo;
        $dato-> comentario = $request->comentario;
        $dato-> estado = "Pendiente";
        $dato->save();
        /*return Redirect('coment.crear');*/

       $idusuario = Auth::user()->id;
       $enviado = 1;
       return view('coment.crear',compact('idusuario','enviado'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function show(Comentario $comentario)
    {
        $dato = Comentario::find($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dato = Comentario::find($id);
        return view('coment.edita', compact( 'dato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dato = Comentario::find($id);
        $dato-> estado = $request->estado;
        $dato->save();
        return redirect('coment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dato = Comentario::find($id);
        $dato->delete($id);
        return redirect('coment');
    }
}
