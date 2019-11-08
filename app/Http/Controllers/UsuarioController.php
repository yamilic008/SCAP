<?php

namespace App\Http\Controllers;

use App\ActAcad;
use App\Gestion;
use App\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\assignRole;
use Validator;
use View;
use Yajra\DataTables\DataTables;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->hasRole('Super_Usuario'))
        {
            $users = User::all();
            return view('usuarios.usuario')->with('users',$users);
        }

        if(auth()->user()->hasRole('Editor'))
        {
            $gestion = Gestion::all();
            /*return 'hola';*/
            return view('editor.gestion.gestion',compact('gestion'));
/*            return route('gestion')
*/        }

        else 
        {
            $dato = ActAcad::all();


        return view('home',compact('dato'));
        }
        
        
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = new User;
         $roles = Role::pluck('name','id');
        

        return view('usuarios.creaUsuario', compact( 'users' ,'roles'));
        //return view('usuario.creaUsuario2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*return $request;*/

        $user = new User;
        $user-> name = $request->name;
        $user-> email = $request->email;
        $user-> password = Hash::make($request->password);
        $user->save();
        
        $users = User::find($request->name);
        $user-> assignRole($request->roles);
        $user->save();
        return Redirect('usuario');
        
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

        $users = User::find($id);
        $roles = Role::pluck('name','id');
        return view('usuarios.editaUsuario',compact('users','roles'));
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
        /*return $request;*/

        $users = User::find($id);
        $users-> name = $request->name;
        //$users-> password = Hash::make($request->password);
        $users-> syncRoles($request->roles);
        $users->save();
        return redirect('usuario');
/*        $users = User::find($id);
        $users->name = $request->nombre;
        $users->email = $request->email;
        $users->save();

        return redirect('usuario'); */
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete($id);
        return redirect('usuario');
        /* $users = User::find($id);
        $id->delete();
       /* 
       return redirect()
       ->route('usuario.index')
       ->with('flash','se ha eliminado el usuario'); */
    }

}
