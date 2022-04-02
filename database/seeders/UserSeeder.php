<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => 'Muhammad Daffa',
            'email' => 'daffa@gmail.com',
            'password' => '$2y$10$9O4P0Atm3HHosONGR5kQVe21J6NiiRyo.KdNxgrdR2s.6ikOw2EWG'
        ]);
    }
}
