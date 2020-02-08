<?php

use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Database\Seeder;
//use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Users
         */
        Permission::create([
            'name' => 'Navegar usuarios',
            'slug' => 'users.index',
            'description' => 'Lista y navega todos los usuarios del sistemas',
        ]);

        Permission::create([
            'name' => 'Ver detalle de usuario',
            'slug' => 'users.show',
            'description' => 'Ver en detalle los datos de cada usuario del sistema',
        ]);

        Permission::create([
            'name' => 'Edicion de usuarios',
            'slug' => 'users.edit',
            'description' => 'Editar cualquier dato de un usuario del sistema',
        ]);

        Permission::create([
            'name' => 'Eliminar usuarios',
            'slug' => 'users.destroy',
            'description' => 'Eliminar cualquier dato de un usuario del sistema',
        ]);

        /**
         * Roles
         */
        Permission::create([
            'name' => 'Navegar roles',
            'slug' => 'roles.index',
            'description' => 'Lista y navega todos los roles del sistemas',
        ]);

        Permission::create([
            'name' => 'Ver detalle de rol',
            'slug' => 'roles.show',
            'description' => 'Ver en detalle los datos de cada rol del sistema',
        ]);

        Permission::create([
            'name' => 'Crear rol',
            'slug' => 'roles.create',
            'description' => 'Crear nuevo rol del sistema',
        ]);

        Permission::create([
            'name' => 'Editar rol',
            'slug' => 'roles.edit',
            'description' => 'Editar cualquier dato de un rol del sistema',
        ]);

        Permission::create([
            'name' => 'Eliminar rol',
            'slug' => 'roles.destroy',
            'description' => 'Eliminar rol del sistema',
        ]);

        /**
         * Configurations
         */
        Permission::create([
            'name' => 'Navegar Configuraciones',
            'slug' => 'configurations.index',
            'description' => 'Lista y navega todas las configuraciones del sistemas',
        ]);

        Permission::create([
            'name' => 'Ver detalle de configuracion',
            'slug' => 'configurations.show',
            'description' => 'Ver en detalle los datos de cada configuracion del sistema',
        ]);

        Permission::create([
            'name' => 'Crear configuracion',
            'slug' => 'configurations.create',
            'description' => 'Crear nueva configuracion del sistema',
        ]);

        Permission::create([
            'name' => 'Editar configuracion',
            'slug' => 'configurations.edit',
            'description' => 'Editar cualquier dato de una configuracion del sistema',
        ]);

        Permission::create([
            'name' => 'Eliminar configuracion',
            'slug' => 'configurations.destroy',
            'description' => 'Eliminar configuracion del sistema',
        ]);

        /**
         * Zonas
         */
        Permission::create([
            'name' => 'Navegar zonas',
            'slug' => 'zonas.index',
            'description' => 'Lista y navega todas las zonas',
        ]);

        Permission::create([
            'name' => 'Ver detalle de zona',
            'slug' => 'zonas.show',
            'description' => 'Ver en detalle los datos de cada zona',
        ]);

        Permission::create([
            'name' => 'Crear zona',
            'slug' => 'zonas.create',
            'description' => 'Crear nueva zona en el sistema',
        ]);

        Permission::create([
            'name' => 'Editar zona',
            'slug' => 'zonas.edit',
            'description' => 'Editar cualquier dato de una zona en el sistema',
        ]);

        Permission::create([
            'name' => 'Eliminar zona',
            'slug' => 'zonas.destroy',
            'description' => 'Eliminar zona del sistema',
        ]);


        /**
         * Localidades
         */
        Permission::create([
            'name' => 'Navegar localidades',
            'slug' => 'localidades.index',
            'description' => 'Lista y navega todas las localidades',
        ]);

        Permission::create([
            'name' => 'Ver detalle de localidad',
            'slug' => 'localidades.show',
            'description' => 'Ver en detalle los datos de cada localidad',
        ]);

        Permission::create([
            'name' => 'Crear localidad',
            'slug' => 'localidades.create',
            'description' => 'Crear nueva localidad en el sistema',
        ]);

        Permission::create([
            'name' => 'Editar localidad',
            'slug' => 'localidades.edit',
            'description' => 'Editar cualquier dato de una localidad en el sistema',
        ]);

        Permission::create([
            'name' => 'Eliminar localidad',
            'slug' => 'localidades.destroy',
            'description' => 'Eliminar localidad del sistema',
        ]);

        /**
         * Facturas
         */
        Permission::create([
            'name' => 'Navegar facturas',
            'slug' => 'invoices.index',
            'description' => 'Lista y navega todas las facturas',
        ]);

        Permission::create([
            'name' => 'Ver detalle de factura',
            'slug' => 'invoices.show',
            'description' => 'Ver en detalle los datos de cada factura',
        ]);

        Permission::create([
            'name' => 'Crear factura',
            'slug' => 'invoices.create',
            'description' => 'Crear nueva factura en el sistema',
        ]);

        Permission::create([
            'name' => 'Editar factura',
            'slug' => 'invoices.edit',
            'description' => 'Editar cualquier dato de una factura en el sistema',
        ]);

        Permission::create([
            'name' => 'Eliminar factura',
            'slug' => 'invoices.destroy',
            'description' => 'Eliminar factura del sistema',
        ]);
    }
}
