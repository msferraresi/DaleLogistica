<?php

use Caffeinated\Shinobi\Models\Role;
use Illuminate\Database\Seeder;



class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'special' => 'all-access'
        ]);

        Role::create([
            'name' => 'Empleado Admin',
            'slug' => 'employed_admin',
            'special' => 'all-access'
        ]);

        Role::create([
            'name' => 'Nuevo Empleado',
            'slug' => 'new_employed',
            'special' => 'no-access'
        ]);

        Role::create([
            'name' => 'Nuevo Cliente',
            'slug' => 'new_client',
            'special' => 'no-access'
        ]);

        Role::create([
            'name' => 'Cliente',
            'slug' => 'client',
        ]);
    }
}
