<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class abonos extends Model
{
    public function fiesta(){
      return $this->belongsToMany('App\Fiesta')
        ->withPivot('created_at', 'tipoPago', 'pinConfirmacion')
        ->withTimestamps();
  }
}
