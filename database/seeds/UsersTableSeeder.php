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
        //usuario cocina
        $AdminCosina = user::create([
            'name' => 'Administrador de la cocina',
            'email' => 'cocina@mail.com',
            'password' => bcrypt('123456')
        ]);
        $AdminCosina->assignRole('AdminCocina');

        $AdminFiestas = user::create([
            'name' => 'Administrador de fiestas',
            'email' => 'fiestas@mail.com',
            'password' => bcrypt('123456')
        ]);
        $AdminFiestas->assignRole('AdminFiestas');

        $AdminVentas = user::create([
            'name' => 'Administrador de las ventas',
            'email' => 'ventas@mail.com',
            'password' => bcrypt('123456')
        ]);
        $AdminVentas->assignRole('AdminVentas');

        $Administrador = user::create([
            'name' => 'Administrador',
            'email' => 'Administrador@mail.com',
            'password' => bcrypt('123456')
        ]);
        $Administrador->assignRole('Administrador');
    }
}
