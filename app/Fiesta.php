<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fiesta extends Model
{
    protected $table = 'fiestas';
    protected $filled = [ 
        'fechaFiesta', 'horaInicio', 'horaFinal', 'horaComida',
        'salon', 'nombrePapa', 'nombreNiño', 'fechaNacNiño',
        'edadNiño', 'calle', 'colonia', 'ciudad', 'telefonoCasa',
        'telefonoCelular', 'correo', 'fechaReservacion', 'idPaquete', 
        'idPeriodo', 'comidaNiños', 'comidaAdulto', 'cantidadComidaNiños',
        'cantidadComidaAdulto', 'totalPaquete', 'total', 'notas',
        'partyStatus', 'piñata', 'pastel', 'manteles'
    ];
  
    public function abonos(){
      return $this->belongsToMany('App\abonos', 'fiesta_abono')
            ->withTimestamps();
  }
}
