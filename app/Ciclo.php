<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciclo extends Model
{
    public function actacad()
    {
    	return $this->hasMany(ActAcad::class);
    }
}
