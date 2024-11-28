<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserRole;
use App\Models\Shop;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DefaultUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'TidyUp',
            'email' => 'test@gmail.com',
            'password' => Hash::make('123'),
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

        $days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        $categoryIds = [[1, 2], [2], [3, 4]];
        $appointmentTypeIds = [[1, 2, 3], [1, 3], [1, 2]];

        // Create branch
        $branch = $shop->branches()->create([
            'shop_id' => $shop->id,
            'branch_name' => 'Main Branch',
            'email' => 'tidyUp@gmail.com',
            'contact_number' => '+1234567890',
            'region' => 'Region IX',
            'province' => 'Zamboanga del Sur',
            'city' => 'Zamboanga City',
            'barangay' => 'San Jose Gusu',
            'detailed_address' => 'San Jose Road, San Jose Gusu, Zamboanga City',
        ]);

        // Attach categories to branch
        $branch->branchCategories()->attach($categoryIds[0], [
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $branch->branchAppointmentTypes()->attach($appointmentTypeIds[0], [
            'created_at' => now(),
            'updated_at' => now()
        ]);
        foreach ($days as $day) {
            // Set Sunday as closed, other days as open
            $isOpen = $day !== 'Sunday';

            DB::table('operation_hours')->insert([
                'branch_id' => $branch->id,
                'day' => $day,
                'is_open' => $isOpen,
                'opening_time' => $isOpen ? '09:00:00' : null,
                'closing_time' => $isOpen ? '18:00:00' : null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $services1 = [
            // Haircut services (category_id: 1)
            [
                'branch_id' => $branch->id,
                'service_name' => 'Burst Fade',
                'cost' => 150.00,
                'duration' => '45 minutes',
                'service_category_id' => 1
            ],
            [
                'branch_id' => $branch->id,
                'service_name' => 'Undercut',
                'cost' => 200.00,
                'duration' => '45 minutes',
                'service_category_id' => 1
            ],
            [
                'branch_id' => $branch->id,
                'service_name' => 'Faded',
                'cost' => 200.00,
                'duration' => '45 minutes',
                'service_category_id' => 1
            ],
            [
                'branch_id' => $branch->id,
                'service_name' => 'Crew Cut',
                'cost' => 180.00,
                'duration' => '30 minutes',
                'service_category_id' => 1
            ],
            [
                'branch_id' => $branch->id,
                'service_name' => 'Classic Taper',
                'cost' => 170.00,
                'duration' => '40 minutes',
                'service_category_id' => 1
            ],
            // Nail services (category_id: 3, 4)
            [
                'branch_id' => $branch->id,
                'service_name' => 'Basic Manicure',
                'cost' => 250.00,
                'duration' => '45 minutes',
                'service_category_id' => 3
            ],
            [
                'branch_id' => $branch->id,
                'service_name' => 'Not Basic Manicure',
                'cost' => 1000.00,
                'duration' => '1 hour',
                'service_category_id' => 3
            ],
            [
                'branch_id' => $branch->id,
                'service_name' => 'Basic Manicure',
                'cost' => 250.00,
                'duration' => '45 minutes',
                'service_category_id' => 4
            ],
        ];

        // Add branch_id to all services
        $services1 = array_map(function ($service) use ($branch) {
            return array_merge($service, ['branch_id' => $branch->id]);
        }, $services1);


        $branch3 = $shop->branches()->create([
            'shop_id' => $shop->id,
            'branch_name' => 'Ayala Branch',
            'email' => 'tidyUp2@gmail.com',
            'contact_number' => '+1234567890',
            'region' => 'Region IX',
            'province' => 'Zamboanga del Sur',
            'city' => 'Zamboanga City',
            'barangay' => 'Ayala',
            'detailed_address' => 'Fabian St., Ayala, Zamboanga City',
        ]);

        // Attach categories to branch
        $branch3->branchCategories()->attach($categoryIds[1], [
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $branch3->branchAppointmentTypes()->attach($appointmentTypeIds[1], [
            'created_at' => now(),
            'updated_at' => now()
        ]);

        foreach ($days as $day) {
            // Set Sunday as closed, other days as open
            $isOpen = $day !== 'Sunday' && $day !== 'Wednesday';

            DB::table('operation_hours')->insert([
                'branch_id' => $branch3->id,
                'day' => $day,
                'is_open' => $isOpen,
                'opening_time' => $isOpen ? '10:00:00' : null,
                'closing_time' => $isOpen ? '22:00:00' : null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $services2 = [
            // Haircut services (category_id: 2)
            [
                'branch_id' => $branch3->id,
                'service_name' => 'Brazilian Blowout',
                'cost' => 2500.00,
                'duration' => '3 hours',
                'service_category_id' => 2
            ],
            [
                'branch_id' => $branch3->id,
                'service_name' => 'Hair Rebond',
                'cost' => 2000.00,
                'duration' => '2 hours',
                'service_category_id' => 2
            ],
            [
                'branch_id' => $branch3->id,
                'service_name' => 'Hair Color',
                'cost' => 1500.00,
                'duration' => '1 hour 30 minutes',
                'service_category_id' => 2
            ],
            [
                'branch_id' => $branch3->id,
                'service_name' => 'Haircut',
                'cost' => 300.00,
                'duration' => '30 minutes',
                'service_category_id' => 2
            ],
            [
                'branch_id' => $branch3->id,
                'service_name' => 'Hair Treatment',
                'cost' => 1000.00,
                'duration' => '1 hour',
                'service_category_id' => 2
            ],
            // Nail services (category_id: 3, 4)
            [
                'branch_id' => $branch3->id,
                'service_name' => 'Classic Manicure',
                'cost' => 350.00,
                'duration' => '1 hour',
                'service_category_id' => 3
            ],
            [
                'branch_id' => $branch3->id,
                'service_name' => 'Gel Manicure',
                'cost' => 550.00,
                'duration' => '1 hour 30 minutes',
                'service_category_id' => 3
            ],
            [
                'branch_id' => $branch3->id,
                'service_name' => 'Classic Pedicure',
                'cost' => 400.00,
                'duration' => '1 hour',
                'service_category_id' => 4
            ],
            [
                'branch_id' => $branch3->id,
                'service_name' => 'Spa Pedicure',
                'cost' => 600.00,
                'duration' => '1 hour 30 minutes',
                'service_category_id' => 4
            ],
        ];
        $services2 = array_map(function ($service) use ($branch3) {
            return array_merge($service, ['branch_id' => $branch3->id]);
        }, $services2);


        $branch4 = $shop->branches()->create([
            'shop_id' => $shop->id,
            'branch_name' => 'Tetuan Branch',
            'email' => 'tidyUp3@gmail.com',
            'contact_number' => '+1234567890',
            'region' => 'Region IX',
            'province' => 'Zamboanga del Sur',
            'city' => 'Zamboanga City',
            'barangay' => 'Tetuan',
            'detailed_address' => 'Tetuan Highway, Tetuan, Zamboanga City',
        ]);

        // Attach categories to branch
        $branch4->branchCategories()->attach($categoryIds[2], [
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $branch4->branchAppointmentTypes()->attach($appointmentTypeIds[2], [
            'created_at' => now(),
            'updated_at' => now()
        ]);

        foreach ($days as $day) {
            // Set Sunday as closed, other days as open
            $isOpen = $day !== 'Sunday' && $day !== 'Saturday';

            DB::table('operation_hours')->insert([
                'branch_id' => $branch4->id,
                'day' => $day,
                'is_open' => $isOpen,
                'opening_time' => $isOpen ? '07:00:00' : null,
                'closing_time' => $isOpen ? '19:00:00' : null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $services3 = [
            // Haircut services (category_id: 3)
            [
                'branch_id' => $branch4->id,
                'service_name' => 'Haircut',
                'cost' => 150.00,
                'duration' => '30 minutes',
                'service_category_id' => 3
            ],
            [
                'branch_id' => $branch4->id,
                'service_name' => 'Haircut',
                'cost' => 150.00,
                'duration' => '30 minutes',
                'service_category_id' => 3
            ],
            [
                'branch_id' => $branch4->id,
                'service_name' => 'Haircut',
                'cost' => 150.00,
                'duration' => '30 minutes',
                'service_category_id' => 3
            ],
            [
                'branch_id' => $branch4->id,
                'service_name' => 'Haircut',
                'cost' => 150.00,
                'duration' => '30 minutes',
                'service_category_id' => 3
            ],
            [
                'branch_id' => $branch4->id,
                'service_name' => 'Haircut',
                'cost' => 150.00,
                'duration' => '30 minutes',
                'service_category_id' => 3
            ],
            // Nail services (category_id: 4)
            [
                'branch_id' => $branch4->id,
                'service_name' => 'Classic Pedicure',
                'cost' => 400.00,
                'duration' => '1 hour',
                'service_category_id' => 4
            ],
            [
                'branch_id' => $branch4->id,
                'service_name' => 'Spa Pedicure',
                'cost' => 600.00,
                'duration' => '1 hour 30 minutes',
                'service_category_id' => 4
            ],
            [
                'branch_id' => $branch4->id,
                'service_name' => 'Classic Pedicure',
                'cost' => 400.00,
                'duration' => '1 hour',
                'service_category_id' => 4
            ],
            [
                'branch_id' => $branch4->id,
                'service_name' => 'Spa Pedicure',
                'cost' => 600.00,
                'duration' => '1 hour 30 minutes',
                'service_category_id' => 4
            ],
        ];

        $services1 = collect($services1)->map(function ($service1) {
            return array_merge($service1, [
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        })->toArray();

        $services2 = collect($services2)->map(function ($service2) {
            return array_merge($service2, [
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        })->toArray();

        $services3 = collect($services3)->map(function ($service3) {
            return array_merge($service3, [
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        })->toArray();

        DB::table('branch_service_categories')->insert($services1);
        DB::table('branch_service_categories')->insert($services2);
        DB::table('branch_service_categories')->insert($services3);
    }
}
