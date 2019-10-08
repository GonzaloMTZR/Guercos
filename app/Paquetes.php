<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paquetes extends Model
{
  public function productos(){
    return $this->belongsToMany('App\Producto', 'paquete_producto',  'paquete_id', 'producto_id')
        ->withTimestamps();
  }

  public function fiestas(){
    return $this->belongsToMany('App\Fiesta', 'fiesta_paquete', 'fiesta_id', 'paquete_id')
        ->withPivot('comidaNino', 'comidaAdulto')
        ->withTimestamps();
  }
}
