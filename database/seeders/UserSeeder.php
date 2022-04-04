<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Pablo Coz Ramos',
            'DNI' => 73573732,
            'password' => bcrypt(73573732),
        ]);
        
        $user->assignRole('Admin');

        User::factory(9)->create();
        
    }
}
