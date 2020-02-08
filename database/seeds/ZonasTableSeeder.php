<?php

use App\zonas;
use Illuminate\Database\Seeder;

class ZonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        zonas::create([
            'id' => '1',
            'description' => 'Zona Norte',
        ]);
        zonas::create([
            'id' => '2',
            'description' => 'Zona Oeste',
        ]);
        zonas::create([
            'id' => '3',
            'description' => 'Zona Sur',
        ]);
    }
}
