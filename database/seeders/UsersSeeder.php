<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Erick',
            'last_name' => 'Estanislau',
            'email' => 'erickestanislau25@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
