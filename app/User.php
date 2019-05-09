<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * Usar format despues de la fecha de nacimiento 
     */
    protected $dates = ['fechaNacimiento'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role',
        'fechaNacimiento', 'direccion', 'telefono',
        'imagenPerfil',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Funcion para hacer la relacion de la tabla user con ventas
     * Un usuario tiene muchas ventas
     */
    public function ventas()
    {
        return $this->hasMany('App\Venta');
    }
}
