<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    public function Ccontable()
    {
    	return $this->hasMany(Ccontable::class);
    }
    public function actacad()
    {
    	return $this->hasMany(ActAcad::class);
    }
}

