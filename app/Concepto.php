<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concepto extends Model
{
    public function cuenta() // $lineaAccion->prioridad->nombre  esto es para llamar una categoria desde la linea de accion
    {
    	//pertenece a 
    	return $this->belongsTo(Cuenta::class);
   }
}
