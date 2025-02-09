<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AdminDefaultSeeder;
use Database\Seeders\DefaultUserSeeder;
use Database\Seeders\DefaultShopSeeder;
use Database\Seeders\DefaultShopBranchSeeder;
use Database\Seeders\ShopImageSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            DefaultUserSeeder::class,
            AdminDefaultSeeder::class,
            DefaultShopSeeder::class,
            DefaultShopBranchSeeder::class,
            ShopImageSeeder::class,
        ]);
    }
}
