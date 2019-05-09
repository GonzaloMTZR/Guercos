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
}
