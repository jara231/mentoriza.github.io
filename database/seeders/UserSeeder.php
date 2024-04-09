<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $user = User::create([
                    'name' => 'Alan Romero',
                    'email' => 'jara148630@gmail.com',
                    'password' => bcrypt('jara0243')
               ]);

        $user->assignRole('Admin');

        $user = User::create([
                    'name' => 'Jose Romero',
                    'email' => 'ing.josealan23@gmail.com',
                    'password' => bcrypt('jara0243')
                ]);
        
        $user->assignRole('Instructor');

       User::factory(10)->create();
    }
}
