<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paquetes extends Model
{
    public function cantidadPersonas(){
      return $this->hasMany('App\CantidadPersonas');
    }
  
    public function producto(){
      return $this->belongsToMany('App\Producto');
    }
}
