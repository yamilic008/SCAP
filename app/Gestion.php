<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gestion extends Model
{
    public function area()
    {
    	return $this->hasMany(Area::class);
    }
}
