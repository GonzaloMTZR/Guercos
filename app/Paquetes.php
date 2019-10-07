<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paquetes extends Model
{
    public function cantidadPersonas(){
      return $this->belongsToMany('App\CantidadPersonas', 'cantidad_persona_paquete', 'paquete_id', 'cantidad_persona_id')
        ->withTimestamps();
    }
  
    public function productos(){
      return $this->belongsToMany('App\Producto', 'paquete_producto',  'paquete_id', 'producto_id')
          ->withPivot('nombre_producto')
          ->withTimestamps();
    }
  
    public function fiestas(){
      return $this->belongsToMany('App\Fiesta', 'fiesta_paquete', 'paquete_id', 'fiesta_id')
          ->withPivot('comidaNino', 'comidaAdulto', 'cantidadNino', 'cantidadAdulto')
          ->withTimestamps();
    
    }
}
