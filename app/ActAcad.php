<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActAcad extends Model
{
    //extender carbon
    protected $fillable = [
            'user_id',         
            'ciclo_id',        
            'nombre',          
            'seccions_id',     
            'linea_accion_id', 
            'area_id',         
            'descripcion',     
            'objetivo',        
            'fechainicio',     
            'fechafin',   
            'estado',     
            'prioridads_id',   
            'gestions_id',     
        
    ];
  protected $dates = ['fechainicio','fechafin'];


  //relaciones
    public function area()  
    {
    	//pertenece a 
    	return $this->belongsTo(Area::class);
   }
   public function LineaAccion()  
    {
    	//pertenece a 
    	return $this->belongsTo(LineaAccion::class);
   }

   public function seccions() // $lineaAccion->prioridad->nombre  esto es para llamar una categoria desde la linea de accion
    {

        //pertenece a 
        return $this->belongsTo(Seccion::class);
   }

  public function user()  
    {
      //pertenece a 
      return $this->belongsTo(User::class);
   }

   public function desgloce() // $lineaAccion->prioridad->nombre  esto es para llamar una categoria desde la linea de accion
    {
        //tiene muchos 
        return $this->hasMany(Desgloce::class);
   }

   public function ciclo()  
    {
      //pertenece a 
      return $this->belongsTo(Ciclo::class);
   }

   public function extra() // $lineaAccion->prioridad->nombre  esto es para llamar una categoria desde la linea de accion
    {
        //tiene muchos 
        /*return $this->hasMany('App\Extra','user_id');*/
        return $this->hasManyThrough('App\Extra',
                                      'App\User',  
                                      'id', 
                                      'user_id',
                                      'user_id',
                                      'id'
                                     );
   }


   
}
