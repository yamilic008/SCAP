<?php

namespace App\Http\Controllers\Project;

use App\ActAcad;
use App\Ccontable;
use App\Cuenta;
use App\Desgloce;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Exports\DesgloceExport;
use App\Imports\DesgloceImport;

class DesgloceController extends Controller
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
            //$ids = ActAcad::find($id);
            //return 'id';
            /*$dato = ActAcad::where('user_id','=', $idusuario)->get();
            $total = ActAcad::where('user_id','=', $idusuario)->sum('total');
            return view('project.actacad.index',compact('dato','total'));*/
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
    public function create($id)
    { 
        
       
        $actividad = ActAcad::find($id);
        $seccion = Ccontable::where('seccions_id','=', $actividad->seccions_id)->get();
        $cuenta = Cuenta::all();
        $dato = new Desgloce;
       return view('project.desgloce.crear', compact( 'dato','seccion','id','actividad','cuenta' ));

  
        //return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dato = new Desgloce;
        $dato-> actividad_id = $request->actividad_id;
        $dato-> ccontable_id = $request->ccontable;
        $dato-> cantidad = $request->cantidad;
        $dato-> recurso = $request->recurso;
        $dato-> proveedor = $request->proveedor;
        $dato-> precio = $request->precio;
        $dato-> Total = $request->total;
        $dato->save();
        
        $actividad = ActAcad::find($request->actividad_id);
        $actividad1 = Desgloce::where('actividad_id','=', $request->actividad_id)->sum('Total');
        $actividad-> total = $actividad1;

        $actividad->save();

        toast('Registro agregado!','success','top-right');
        return redirect()->route ('desgloce.show',$request->actividad_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Desgloce  $desgloce
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(auth()->user()->hasRole('Proyectista'))
        {
            $actividad = ActAcad::find($id);
            $dato = Desgloce::where('actividad_id','=', $id)->get();
            $total = Desgloce::where('actividad_id','=', $id)->sum('Total');
            return view('project.desgloce.index',compact('dato','total','actividad'));
            /*$dato = ActAcad::where('user_id','=', $idusuario)->get();
            $total = ActAcad::where('user_id','=', $idusuario)->sum('total');
            */
        }

        if(auth()->user()->hasRole('Supervisor')||auth()->user()->hasRole('Supervisor_Prescolar')||auth()->user()->hasRole('Supervisor_Primaria')||auth()->user()->hasRole('Supervisor_Secundaria')||auth()->user()->hasRole('Supervisor_Bachillerato')||auth()->user()->hasRole('Supervisor_CGA')||auth()->user()->hasRole('Supervisor_FI')||auth()->user()->hasRole('Supervisor_CyV'))
        {
            $actividad = ActAcad::find($id);
            $dato = Desgloce::where('actividad_id','=', $id)->get();
            $total = Desgloce::where('actividad_id','=', $id)->sum('Total');
            return view('project.desgloce.IndexVer',compact('dato','total','actividad'));
            /*$dato = ActAcad::where('user_id','=', $idusuario)->get();
            $total = ActAcad::where('user_id','=', $idusuario)->sum('total');
            */
        }
        else 
        {
            return view('home');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Desgloce  $desgloce
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(auth()->user()->hasRole('Supervisor')||auth()->user()->hasRole('Supervisor_Prescolar')||auth()->user()->hasRole('Supervisor_Primaria')||auth()->user()->hasRole('Supervisor_Secundaria')||auth()->user()->hasRole('Supervisor_Bachillerato')||auth()->user()->hasRole('Supervisor_CGA')||auth()->user()->hasRole('Supervisor_FI')||auth()->user()->hasRole('Supervisor_CyV'))
        {
          $dato =  Desgloce::find($id);
        $actividad = ActAcad::find($dato->actividad_id);
        $seccion = Ccontable::where('seccions_id','=', $actividad->seccions_id)->get();
        $cuenta = Cuenta::all();

       
        return view('project.desgloce.EditaVer', compact( 'dato','seccion','actividad','cuenta' ));  
        }
        $dato =  Desgloce::find($id);
        $actividad = ActAcad::find($dato->actividad_id);
        $seccion = Ccontable::where('seccions_id','=', $actividad->seccions_id)->get();
        $cuenta = Cuenta::all();

       
        return view('project.desgloce.edita', compact( 'dato','seccion','actividad','cuenta' ));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Desgloce  $desgloce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dato = Desgloce::find($id);
        $dato-> ccontable_id = $request->ccontable;
        $dato-> cantidad = $request->cantidad;
        $dato-> recurso = $request->recurso;
        $dato-> proveedor = $request->proveedor;
        $dato-> precio = $request->precio;
        $dato-> Total = $request->total;
        $dato->save();

        $actividad = ActAcad::find($request->actividad_id);
        $actividad1 = Desgloce::where('actividad_id','=', $dato->actividad_id)->sum('Total');
        $actividad-> total = $actividad1;
        $actividad->save();

        return redirect()->route ('desgloce.show',$request->actividad_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Desgloce  $desgloce
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        alert()->success('Borrado!','El Registro ha sido borrado');
        $dato = Desgloce::find($id);
        $dato->delete($id);

        $actividad = ActAcad::find($dato->actividad_id);
        $actividad1 = Desgloce::where('actividad_id','=', $dato->actividad_id)->sum('Total');
        $actividad-> total = $actividad1;

        $actividad->save();
        return back(); 
    }
/*muestro solo la pantalla de exportacion*/    
    public function expimp($id)
    {
        
        return view('project.desgloce.export', compact('id') );

    }

    public function exportar(Request $request,$id)
    {


        $dato = Desgloce::where('actividad_id','=', $id)->get();
        $actividad = ActAcad::find($id);
        $total = Desgloce::where('actividad_id','=', $id)->sum('Total');

        /*return Excel::download( Desgloce::where('actividad_id','=', $id), 'users.xlsx');*/
        alert()->success('Exportado!','El Registro ha sido Exportado Exitosamente');
        return Excel::download(new DesgloceExport($id),'Desglose_'.$actividad->nombre.'.html', \Maatwebsite\Excel\Excel::HTML);


    }
        public function importar(Request $request,$id)
    {
            $archivo = $request->csv_file->getClientOriginalName();
            $revision = substr($archivo, 0, 9);


            if ($revision == 'Desglose_') 
            {
                $dato = Desgloce::where('actividad_id','=', $id)->get();
                $actividad = ActAcad::find($id);

                Excel::import(new DesgloceImport($id), $request->csv_file);

                alert()->success('Importado!','El Registro ha sido Importado Exitosamente');
                return view('project.desgloce.export',compact('id'));
            }
            else
            {
                alert()->warning('Cuidado!','El Archivo que tratas de importar no es el correcto');
                return view('project.desgloce.export', compact('id') );
            }
        

    }
}
