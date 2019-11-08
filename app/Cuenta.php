<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    public function Ccontable()
    {
    	return $this->hasMany(Ccontable::class);
    }
    public function concepto() // $lineaAccion->prioridad->nombre  esto es para llamar una categoria desde la linea de accion
    {
        //tiene muchos 
        return $this->hasMany(Concepto::class);
   }
   

}




