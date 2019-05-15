<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CantidadPersonas extends Model
{
    public function paquete(){
      return $this->belongsTo('App\Paquetes');
    }
}
