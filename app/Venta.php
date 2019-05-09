<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{   
    /**
     * Funcion para hacer la relacion de ventas a usuarios
     * Una venta pertenece a un usuario
    */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function productos()
    {
        return $this->belongsToMany('App\Producto')
            ->withPivot('cantidad', 'descuento')
            ->withTimestamps();
    }
}
