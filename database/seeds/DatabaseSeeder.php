<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PermissionsTableSeeder::class);
         $this->call(ZonasTableSeeder::class);
         $this->call(LocalidadesTableSeeder::class);
         $this->call(RolesTableSeeder::class);
         $this->call(CondicionIvaTableSeeder::class);
         $this->call(TypePhoneTableSeeder::class);
    }
}
