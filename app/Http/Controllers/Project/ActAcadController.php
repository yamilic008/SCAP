<?php

namespace App\Http\Controllers\Project;

use App\ActAcad;
use App\Area;
use App\Ciclo;
use App\Gestion;
use App\Http\Controllers\Controller;
use App\LineaAccion;
use App\Prioridad;
use App\Seccion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ActAcadExport;
use App\Imports\ActAcadImport;
use Carbon\Carbon;

class ActAcadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->hasRole('Proyectista'))
        {
            $idusuario = Auth::user()->id;
            $dato = ActAcad::where('user_id','=', $idusuario)->get();
            $total = ActAcad::where('user_id','=', $idusuario)->sum('total');
            /*$dato = ActAcad::all();*/
            /*return 'hola';*/
            return view('project.actacad.index',compact('dato','total'));
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
        $dato = new ActAcad;
        $gestion=Gestion::all();
        $seccion= Seccion::all();
        $prioridad = Prioridad::all();
        $idusuario = Auth::user()->id;
        $ciclo = Ciclo::all();
        return view('project.actacad.crear', compact( 'dato','prioridad','gestion','seccion','idusuario','ciclo' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dato = new ActAcad; 
        $dato-> user_id = $request->user_id;
        $dato-> nombre = $request->nombre;
        $dato-> total = $request->total;
        $dato-> area_id = $request->area;
        $dato-> seccions_id = $request->ccostos;

        $dato-> prioridads_id = $request->prioridad;
        $dato-> gestions_id = $request->gestion;

        $dato-> linea_accion_id = $request->linea;
        $dato-> fechainicio = $request->fechainicio;
        $dato-> fechafin = $request->fechafin;
        $dato-> descripcion = $request->descripcion;
        $dato-> objetivo = $request->observacion;
        $dato-> ciclo_id = $request->ciclo;
        $dato-> estado = "Pendiente";
        $dato->save();

        toast('Registro agregado!','success','top-right');
        return Redirect('actacad');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ActAcad  $actAcad
     * @return \Illuminate\Http\Response
     */
    public function show(ActAcad $actAcad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ActAcad  $actAcad
     * @return \Illuminate\Http\Response
     */ 
    public function edit($id)
    {
        $idusuario = Auth::user()->id;
        $dato =  ActAcad::find($id);
        $gestion=Gestion::all();
        $seccion= Seccion::all();
        $prioridad = Prioridad::all();
        $linea=LineaAccion::all();
        $area=Area::all();
        $now = Carbon::now()->format('Y-m-d');
        if($now>$dato->fechafin && $dato->estado === 'Aprobado' || $dato->estado === 'Aprobado')
        {
            $vista ='readonly';
        }
        else
        {
        $vista ='';
        }

        return view('project.actacad.edita', compact( 'dato','prioridad','gestion','seccion','idusuario','linea','area','now','vista' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ActAcad  $actAcad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $dato = ActAcad::find($id);
        
        if($now>$dato->fechafin && $dato->estado === 'Aprobado')
        {
            $dato-> observacion = $request->observacion;
        }
        else
        {
        $dato-> nombre = $request->nombre;
        $dato-> seccions_id = $request->ccostos;
        $dato-> linea_accion_id = $request->linea;
        $dato-> area_id = $request->area;
        $dato-> descripcion = $request->descripcion;
        $dato-> objetivo = $request->objetivo;
        $dato-> fechainicio = $request->fechainicio;
        $dato-> fechafin = $request->fechafin;
        $dato-> user_id = $request->user_id;
        $dato-> prioridads_id = $request->prioridad;
        $dato-> gestions_id = $request->gestion; 
        }
      
        $dato->save();

       return redirect('actacad');
        //return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ActAcad  $actAcad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        alert()->success('Borrado!','El Registro ha sido borrado');
        $dato = ActAcad::find($id);
        $dato->delete($id);
        return redirect('actacad'); 
    }

    public function byPrioridad($id)
    {
        return LineaAccion::where('prioridad_id',$id)->get();
    }

    public function byArea($id)
    {
        return Area::where('gestion_id',$id)->get();
    }

    public function Aprobar(Request $request, $id)
    {
        $dato = ActAcad::find($id);
        $dato-> estado = $request->estado;
        $dato->save();
        return back();
    }

    public function expimp()
    {
        if(auth()->user()->hasRole('Proyectista'))
        {
            $idusuario = Auth::user()->id;
            $dato = ActAcad::where('user_id','=', $idusuario)->get(); 
            return view('project.actacad.export',compact('idusuario','dato'));
         }
        

    }

    public function actexportar(Request $request)
    {


        $actividad = ActAcad::find($request->actacad);

        alert()->success('Exportado!','El Registro ha sido Exportado Exitosamente');
        return Excel::download(new ActAcadExport($request->actacad),'ActAcad_'.$actividad->nombre.'.html', \Maatwebsite\Excel\Excel::HTML);


    }
    public function actimportar(Request $request)
    {

            $archivo = $request->csv_file->getClientOriginalName();
            $revision = substr($archivo, 0, 8);
            /*$archivo = $request->csv_file;*/

        
        if ($revision == 'ActAcad_') 
        {
            $id = Auth::user()->id;
            Excel::import(new ActAcadImport($id), $request->csv_file);

            $idusuario = Auth::user()->id;
            $dato = ActAcad::where('user_id','=', $idusuario)->get();
            $total = ActAcad::where('user_id','=', $idusuario)->sum('total');


            alert()->success('Importado!','El Registro ha sido Importado Exitosamente');
            return view('project.actacad.index',compact('id','dato','total'));
        }
        else
        {
            $id = Auth::user()->id;
            /*Excel::import(new ActAcadImport($id), $request->csv_file);*/

            $idusuario = Auth::user()->id;
            $dato = ActAcad::where('user_id','=', $idusuario)->get();
            $total = ActAcad::where('user_id','=', $idusuario)->sum('total');


            alert()->warning('Cuidado!','El Archivo que tratas de importar no es el correcto');
            return view('project.actacad.export',compact('id','dato','total'));
        }
        

    }
}
