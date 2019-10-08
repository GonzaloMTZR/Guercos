<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fiesta extends Model
{
  protected $table = 'fiestas';
  protected $fillable = [ 
      'fechaFiesta', 'horaInicio', 'horaFinal', 'horaComida',
      'salon', 'nombrePapa', 'nombreNiño', 'fechaNacNiño',
      'edadNiño', 'calle', 'colonia', 'ciudad', 'telefonoCasa',
      'telefonoCelular', 'correo', 'fechaReservacion', 'idPaquete', 
      'idPeriodo', 'comidaNiños', 'comidaAdulto', 'cantidadComidaNiños',
      'cantidadComidaAdulto', 'totalPaquete', 'total', 'notas',
      'partyStatus', 'piñata', 'pastel', 'manteles', 'anticipo', 'liquidacion',
  ];

  public function abonos(){
    return $this->belongsToMany('App\abonos')
          ->withPivot('created_at', 'tipoPago', 'pinConfirmacion')
          ->withTimestamps();
  }

  public function paquetes(){
    return $this->belongsToMany('App\Paquetes', 'fiesta_paquete', 'fiesta_id', 'paquete_id')
          ->withPivot('comidaNino', 'comidaAdulto')
          ->withTimestamps();  
  }
}
