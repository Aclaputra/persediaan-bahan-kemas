<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'alamat' => "Jl. Mega Kuningan",
                'role' => 'admin',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'aclaputra',
                'email' => 'customer@gmail.com',
                'alamat' => "Jl. Mega Kuningan",
                'role' => 'marketing',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'saipulloh',
                'email' => 'direktur@gmail.com',
                'alamat' => "Jl. Mega Kuningan",
                'role' => 'marketing',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'alcaumaru',
                'email' => 'marketing@gmail.com',
                'alamat' => "Jl. Mega Kuningan",
                'role' => 'marketing',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'yosafat',
                'email' => 'supplier@gmail.com',
                'alamat' => "Jl. Mega Kuningan",
                'role' => 'marketing',
                'password' => bcrypt('password'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
