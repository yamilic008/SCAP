<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desgloce extends Model
{
	protected $fillable = [
        'actividad_id', 'ccontable_id', 'cantidad','recurso','proveedor','precio','Total'
    ];
    public function actacad()
    {
        return $this->belongsTo(ActAcad::class);
    }
    public function ccontable() // $lineaAccion->prioridad->nombre  esto es para llamar una categoria desde la linea de accion
    {
    	//pertenece a 
    	return $this->belongsTo(Ccontable::class);
   }

}
