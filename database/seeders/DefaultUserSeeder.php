<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserRole;
use App\Models\Shop;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DefaultUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'TidyUp',
            'email' => 'test@gmail.com',
            'password' => Hash::make('test'),
        ]);

        UserRole::create([
            'user_id' => 1,
            'role_id' => 3,
        ]);

        $shop = Shop::create([
            'shop_name' => 'Tidy Up'
        ]);

        // Create shop account
        $shop->shopAccount()->create([
            'shop_owner_id' => 1,
            'shop_id' => $shop->id,
        ]);

        $categoryIds = [1, 2, 3];

        // Create branch
        $branch = $shop->branches()->create([
            'shop_id' => $shop->id,
            'branch_name' => 'Main',
            'email' => 'tidyUp@gmail.com',
            'contact_number' => '+1234567890',
            'region' => 'Region IX',
            'province' => 'Zamboanga del Sur',
            'city' => 'Zamboanga City',
            'barangay' => 'Ayala',
            'detailed_address' => 'Fabian St., Ayala, Zamboanga City',
        ]);

        // Attach categories to branch
        $branch->branchCategories()->attach($categoryIds, [
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Second set of default records
        $user2 = User::create([
            'username' => 'Art Michael Cadiz',
            'email' => 'test2@gmail.com',
            'password' => Hash::make('test'),
        ]);

        UserRole::create([
            'user_id' => $user2->id,
            'role_id' => 3,
        ]);

        $shop2 = Shop::create([
            'shop_name' => 'Art\'s Canvas'
        ]);

        // Create second shop account
        $shop2->shopAccount()->create([
            'shop_owner_id' => $user2->id,
            'shop_id' => $shop2->id,
        ]);

        // Create second branch
        $branch2 = $shop2->branches()->create([
            'shop_id' => $shop2->id,
            'branch_name' => 'Main Branch',
            'email' => 'artscanvas@gmail.com',
            'contact_number' => '+0987654321',
            'region' => 'Region IX',
            'province' => 'Zamboanga del Sur',
            'city' => 'Zamboanga City',
            'barangay' => 'Ayala',
            'detailed_address' => 'Zone 1, Yubenco Ayala, Zamboanga City',
        ]);

        // Attach categories to second branch
        $branch2->branchCategories()->attach($categoryIds, [
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
