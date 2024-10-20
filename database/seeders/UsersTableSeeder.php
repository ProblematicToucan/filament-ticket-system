<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@garamm.dev',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => null,
            ],
            [
                'name' => 'Agent',
                'email' => 'agent@garamm.dev',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
