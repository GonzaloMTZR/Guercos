<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'Punto de venta de cocina']);
        Permission::create(['name' => 'Ver productos']);
        Permission::create(['name' => 'Agregar productos']);
        Permission::create(['name' => 'Editar productos']);
        Permission::create(['name' => 'Eliminar productos']);

        Permission::create(['name' => 'Punto de venta de entrada']);
        Permission::create(['name' => 'Ver productos entrada']);        

        Permission::create(['name' => 'Ver fiestas']);
        Permission::create(['name' => 'Agendar fiestas']);
        Permission::create(['name' => 'Editar Fiestas']);
        Permission::create(['name' => 'Eliminar fiestas']);

        Permission::create(['name' => 'ver paquetes']);
        Permission::create(['name' => 'Agregar paquetes']);
        Permission::create(['name' => 'Editar paquetes']);
        Permission::create(['name' => 'Eliminar paquetes']);

        Permission::create(['name' => 'Ver clientes']);
        Permission::create(['name' => 'Agregar cientes']);
        Permission::create(['name' => 'Editar clientes']);
        Permission::create(['name' => 'Eliminar clientes']);
        Permission::create(['name' => 'Enviar correos a clientes']);

        /*
        * Nuevos permisos
        */
        Permission::create(['name' => 'Ver perfil']);
        Permission::create(['name' => 'Editar perfil']);

        Permission::create(['name' => 'Ver empleados']);
        Permission::create(['name' => 'Agregar empleados']);
        Permission::create(['name' => 'Editar empleados']);
        Permission::create(['name' => 'Eliminar empleados']);

        Permission::create(['name' => 'Ver ventas']);
        Permission::create(['name' => 'Agregar ventas']);
        Permission::create(['name' => 'Editar ventas']);
        Permission::create(['name' => 'Eliminar ventas']);
        Permission::create(['name' => 'Generar reportes']);
        Permission::create(['name' => 'Ver reportes']);
        Permission::create(['name' => 'Editar reportes']);
        Permission::create(['name' => 'Eliminar reportes']);

        /*
            Permission::create(['name' => 'Ver permisos']);
            Permission::create(['name' => 'Agregar permisos']);
            Permission::create(['name' => 'Editar permisos']);
            Permission::create(['name' => 'Eliminar permisos']);
            Permission::create(['name' => 'Ver roles']);
            Permission::create(['name' => 'Agregar roles']);
            Permission::create(['name' => 'Editar roles']);
            Permission::create(['name' => 'Eliminar roles']);
        */


        //Rol de entrada y punto de venta
        $role = Role::create(['name' => 'AdminEntrada'])
            ->givePermissionTo(['Punto de venta de entrada','Ver productos', 'Agregar productos',
            'Editar productos', 'Eliminar productos', 'Ver perfil', 'Editar perfil', 'Ver empleados']
        );

        $role = Role::create(['name' => 'VendedorPVEntrada'])
            ->givePermissionTo(['Punto de venta de entrada', 'Ver productos entrada', 'Ver perfil', 'Editar perfil']
        );

        //Rol de cocina y punto de venta
        $role = Role::create(['name' => 'AdminCocina'])
            ->givePermissionTo(['Punto de venta de cocina','Ver productos', 'Agregar productos',
            'Editar productos', 'Eliminar productos', 'Ver perfil', 'Editar perfil', 'Ver empleados', 'Generar reportes', 
            'Ver reportes']
        );
        $role = Role::create(['name' => 'VendedorPVCocina'])
            ->givePermissionTo(['Punto de venta de cocina', 'Ver productos', 'Ver perfil', 'Editar perfil']
        );
        
        //Rol para fiestas
        $role = Role::create(['name' => 'AdminFiestas'])
            ->givePermissionTo(['Ver fiestas', 'Agendar fiestas', 'Editar Fiestas', 'Eliminar fiestas',
            'ver paquetes', 'Agregar paquetes', 'Editar paquetes', 'Eliminar paquetes', 'Ver productos',
            'Ver clientes', 'Agregar cientes', 'Eliminar clientes', 'Eliminar clientes', 'Enviar correos a clientes',
            'Ver perfil', 'Editar perfil', 'Ver empleados', 'Generar reportes', 'Ver reportes']
        );

        //Rol de ventas
        $role = Role::create(['name' => 'AdminVentas'])
            ->givePermissionTo(['Ver ventas', 'Agregar ventas', 'Editar ventas', 'Eliminar ventas', 'Generar reportes', 
            'Ver reportes', 'Editar reportes', 'Eliminar reportes', 'Ver productos', 'Editar productos', 'Ver perfil', 
            'Editar perfil', 'Ver empleados', 'Ver empleados']
        );

        //Rol de administrador general ** NUEVO **
        $role = Role::create(['name' => 'Administrador'])
            ->givePermissionTo(Permission::all()
        );
    }
}
