<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Administrador = user::create([
            'name' => 'Administrador',
            'email' => 'Administrador@mail.com',
            'password' => bcrypt('secret'),
            'fechaNacimiento' => '2019-08-31',
            'direccion' => 'TIKS y Capacitaciones',
            'telefono' => '834-197-7635',
            'imagenPerfil' => 'Group-user.jpg'
        ]);
        $Administrador->assignRole('Administrador');
    }
}
