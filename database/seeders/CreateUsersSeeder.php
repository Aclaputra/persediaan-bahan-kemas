<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'aclaputra',
                'email' => 'acla@gmail.com',
                'role' => 'user',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'myrakarimah',
                'email' => 'myra@gmail.com',
                'role' => 'user',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'alcaumaru',
                'email' => 'alca@gmail.com',
                'role' => 'user',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'yosafat',
                'email' => 'yosafat@gmail.com',
                'role' => 'user',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
