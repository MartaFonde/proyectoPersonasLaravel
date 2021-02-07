<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \DB::table('users')->insert([
            'name' => 'Marta',
            'email' => 'marta4510@hotmail.com',
            'password' => bcrypt('12345678'),
            'rol'=>0]);
        \DB::table('users')->insert([
        'name' => 'Alex',
        'email' => 'alex@gmail.com',
        'password' => bcrypt('12345678'),
        'rol'=>1]);
    }
}
