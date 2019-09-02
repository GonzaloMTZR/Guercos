<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CantidadPersonas extends Model
{
    public function paquete(){
      return $this->belongsToMany('App\Paquetes', 'cantidad_persona_paquete', 'paquete_id', 'cantidad_persona_id')
        ->withTimestamps();
    }
}
