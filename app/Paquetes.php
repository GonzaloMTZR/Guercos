<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paquetes extends Model
{
    public function cantidadPersonas(){
      return $this->hasMany('App\CantidadPersonas');
    }
  
    public function comida(){
      return $this->hasMany('App\Productos');
    }
}
