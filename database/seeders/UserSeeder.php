<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /** 
     * 
     * @return void 
    */

    public function run()
    {
        User::create([
            'name' => 'Luis Uriel Robles Estrada',
            'email' => 'sistemas@tracto.com.mx',
            'password' => bcrypt('S0p0rt3!!')
        ])->assignRole('Tecnico');

        User::factory(9)->create();
    }
}