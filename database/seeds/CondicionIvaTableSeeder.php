<?php

use App\condicion_iva;
use Illuminate\Database\Seeder;

class CondicionIvaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        condicion_iva::create(['description'=>'IVA Responsable Inscripto',]);
        condicion_iva::create(['description'=>'IVA Sujeto Exento',]);
        condicion_iva::create(['description'=>'Consumidor Final',]);
        condicion_iva::create(['description'=>'Responsable Monotributo',]);
        condicion_iva::create(['description'=>'Sujeto No Categorizado',]);
        condicion_iva::create(['description'=>'Proveedor del Exterior',]);
        condicion_iva::create(['description'=>'Cliente del Exterior',]);
        condicion_iva::create(['description'=>'IVA Liberado - Ley Nº 19640',]);
        condicion_iva::create(['description'=>'IVA Responsable Inscripto - Agente de Percepcion',]);
        condicion_iva::create(['description'=>'Monotributista Social',]);
        condicion_iva::create(['description'=>'IVA No Alcanzado',]);
    }
}
