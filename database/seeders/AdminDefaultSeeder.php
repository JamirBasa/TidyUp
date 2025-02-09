<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserRole;

class AdminDefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'first_name' => 'Admin',
            'last_name' => 'Admin',
        ]);

        UserRole::create([
            'user_id' => 7,
            'role_id' => 4,
        ]);
    }
}
