<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DefaultUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'useruser',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user'),
        ]);

        UserRole::create([
            'user_id' => 1,
            'role_id' => 1,
        ]);
    }
}
