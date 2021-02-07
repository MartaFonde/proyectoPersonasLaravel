<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//use DB;

class PersonasDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \DB::table('personas')->insert([
            'nombre'=>'Mila',
            'direccion'=>'lalin',
            'telefono'=>'666666666',
            'email'=>'mila@gmail.com'
        ]);
    }
}
