<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1234567890'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'validator',
            'email' => 'validator@gmail.com',
            'password' => bcrypt('1234567890'),
            'role' => 'validator'
        ]);

        User::create([
            'name' => 'chathu',
            'email' => 'chathu@gmail.com',
            'password' => bcrypt('1234567890'),
            'role' => 'user'
        ]);

        
    }
}
