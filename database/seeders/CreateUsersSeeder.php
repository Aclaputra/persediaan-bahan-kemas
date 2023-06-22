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
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=> bcrypt('password'),
            ],
            [
                'name'=>'aclaputra',
                'email'=>'acla@gmail.com',
                'role'=>'user',
                'password'=> bcrypt('password'),
            ],
            [
                'name'=>'dipesh malvia',
                'email'=>'dipesh@gmail.com',
                'role'=>'user',
                'password'=> bcrypt('password'),
            ],
            [
                'name'=>'alcaumaru',
                'email'=>'alca@gmail.com',
                'role'=>'user',
                'password'=> bcrypt('password'),
            ],
            [
                'name'=>'yosafat',
                'email'=>'yosafat@gmail.com',
                'role'=>'user',
                'password'=> bcrypt('password'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
