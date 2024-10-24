<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'nama' => 'Destri wahyu ikhsani',
            'email' => 'destri.iw@gmail.com',
            'role' => '1', 
            'status' => 1, 
            'hp' => '085783150726', 
            'password' => bcrypt('P@55word'), 
        ]);
        User::create([
            'nama' => 'Elsa Alia Safinka',
            'email' => 'elsa.alia.safinka@gmail.com',
            'role' => '1',
            'status' => 1, 
            'hp' => '088214402077', 
            'password' => bcrypt('P@55word'), 
        ]);
    }
}
