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
                'role' => 'admin_gudang',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'aclaputra',
                'email' => 'customer@gmail.com',
                'role' => 'customer',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'saipulloh',
                'email' => 'direktur@gmail.com',
                'role' => 'direktur',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'alcaumaru',
                'email' => 'marketing@gmail.com',
                'role' => 'marketing',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'yosafat',
                'email' => 'supplier@gmail.com',
                'role' => 'supplier',
                'password' => bcrypt('password'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
