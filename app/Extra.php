<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
     public function user() // $lineaAccion->prioridad->nombre  esto es para llamar una categoria desde la linea de accion
    {
        
        return $this->belongsTo(User::class);
   }
   public function actacad()
    {
        return $this->belongsTo('App\ActAcad','user_id');
    }
}
