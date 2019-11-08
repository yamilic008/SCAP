<?php

namespace App\Http\Controllers\pdf;

use App\ActAcad;
use App\Area;
use App\Ccontable;
use App\Concepto;
use App\Cuenta;
use App\Desgloce;
use App\Gestion;
use App\Http\Controllers\Controller;
use App\LineaAccion;
use App\Prioridad;
use App\Seccion;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
     public function pdfsecciones()
    {
    	$dato= Seccion::all();
        $pdf = PDF::loadView('editor.pdf.pdfseccions',compact('dato'));
        /*return $pdf->download('pdfview.pdf'); */  
        return $pdf->stream();
    }
     public function pdfccontable()
    {
    	$dato= Ccontable::all();
    	$seccion = Seccion::all();
        $cuenta = Cuenta::all();
        $pdf = PDF::loadView('editor.pdf.pdfccontable',compact('dato','seccion','cuenta'));
        /*return $pdf->download('pdfview.pdf'); */  
        return $pdf->stream();
    }
     public function pdfcuenta()
    {
    	$dato= Concepto::all();
    	$cuenta = Cuenta::all();
    	$categoria = $dato->groupBy('cuenta_id');
        $pdf = PDF::loadView('editor.pdf.pdfcuenta',compact('dato','cuenta','categoria'));
        /*return $pdf->download('pdfview.pdf'); */  
        return $pdf->stream();
    }
    public function pdflaccion()
    {
    	$dato= LineaAccion::all();
    	$prioridad = Prioridad::all();
        $pdf = PDF::loadView('editor.pdf.pdflaccion',compact('dato','prioridad'));
        /*return $pdf->download('pdfview.pdf'); */  
        return $pdf->stream();
    }
    public function pdfarea()
    {
        $dato= Area::all();
        $gestion = Gestion::all();
        $pdf = PDF::loadView('editor.pdf.pdfarea',compact('dato','gestion'));
        /*return $pdf->download('pdfview.pdf'); */  
        return $pdf->stream();
    }
    public function pdfact($id)
    {
        
        $dato= ActAcad::find($id);
        $desgloce = Desgloce::where('actividad_id','=', $id)->get();
        $pdf = PDF::loadView('project.pdf.pdfact',compact('dato','desgloce'));
        /*return $pdf->download('pdfview.pdf'); */  
        return $pdf->stream();
    }
}
