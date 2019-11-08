<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
   public function user()  
   {
      //pertenece a 
      return $this->belongsTo(User::class);
   }
}
