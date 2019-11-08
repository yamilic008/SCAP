<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ccontable extends Model
{

     public function seccions() // $lineaAccion->prioridad->nombre  esto es para llamar una categoria desde la linea de accion
    {

        //pertenece a 
        return $this->belongsTo(Seccion::class);
   }

    public function cuentas() // $lineaAccion->prioridad->nombre  esto es para llamar una categoria desde la linea de accion
    {
    	//pertenece a 
    	return $this->belongsTo(Cuenta::class);
   }
    public function desgloce() // $lineaAccion->prioridad->nombre  esto es para llamar una categoria desde la linea de accion
    {
        //tiene muchos 
        return $this->hasMany(Desgloce::class);
   }

}
