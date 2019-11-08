<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function gestion() 
    {
    	//pertenece a 
    	return $this->belongsTo(Gestion::class);
   }

   public function actacad()
    {
    	return $this->hasMany(ActAcad::class);
    }
}
