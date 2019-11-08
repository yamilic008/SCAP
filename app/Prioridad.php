<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prioridad extends Model
{
    //
    public function LineaAccions()
    {
    	return $this->hasMany(LineaAccion::class);
    }
}
