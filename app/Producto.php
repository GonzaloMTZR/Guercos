<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $guarded = [];

    public function ventas()
    {
        return $this->belongsToMany('App\Venta');
    }
  
    public function paquetes()
    {
        return $this->belongsToMany('App\Paquetes', 'paquete_producto', 'paquete_id', 'producto_id')
          ->withTimestamps();
    }
}
