<?php

namespace App\Http\Controllers\super;

use App\Extra;
use App\ActAcad;
use App\Ciclo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportesController extends Controller
{
     public function prescolar()
    {
    	$dato=ActAcad::all();
    	$dato1=ActAcad::all();
    	$ciclo = Ciclo::all();
        $extra = Extra::all();
        return view('super.index',compact('dato','dato1','ciclo','extra'));
    }

     public function PrescolarSeccion(Request $request)
    {
    	/*return $request->ciclo;*/

    	$dato=ActAcad::where('ciclo_id', '=', $request->ciclo)->get();
    	$dato1=ActAcad::where('ciclo_id', '=', $request->ciclo)->get();
    	$ciclo = Ciclo::all();
        return view('super.index',compact('dato','dato1','ciclo'));
    }
     public function Reporte(Request $request,$id)
    {
        $seccion = $id;
        $dato=ActAcad::all();
        $dato1=ActAcad::all();
        $ciclo = Ciclo::all();
        return view('super.preescolar',compact('dato','dato1','ciclo','seccion'));
    }
      public function ReporteFiltro(Request $request)
    {
        /*return $request->ciclo;*/

        $dato=ActAcad::where('ciclo_id', '=', $request->ciclo)->get();
        $dato1=ActAcad::where('ciclo_id', '=', $request->ciclo)->get();
        $ciclo = Ciclo::all();
        $seccion = $request->seccion;
        return view('super.preescolar',compact('dato','dato1','ciclo','seccion'));
    }
}
 