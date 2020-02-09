<?php

use App\type_phone;
use Illuminate\Database\Seeder;

use function Ramsey\Uuid\v1;

class TypePhoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        type_phone::create(['description'=>'Movil',]);
        type_phone::create(['description'=>'Trabajo',]);
        type_phone::create(['description'=>'Casa',]);
        type_phone::create(['description'=>'Principal',]);
        type_phone::create(['description'=>'Fax Laboral',]);
        type_phone::create(['description'=>'Fax Personal',]);
        type_phone::create(['description'=>'Localizador',]);
        type_phone::create(['description'=>'Otro',]);       
    }
}
