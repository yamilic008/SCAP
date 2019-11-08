<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LineaAccion extends Model
{
    //
	/*protected $table="linea_accions";*/
	/*protected $fillable=['nombre'];*/
    public function prioridad() // $lineaAccion->prioridad->nombre  esto es para llamar una categoria desde la linea de accion
    {
    	//pertenece a 
    	return $this->belongsTo(Prioridad::class);
   }

   public function actacad()
    {
    	return $this->hasMany(ActAcad::class);
    }
}
