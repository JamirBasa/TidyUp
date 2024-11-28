<?php

namespace Database\Seeders;

use App\Models\BranchCategory;
use Illuminate\Database\Seeder;
use App\Models\Shop;
use App\Models\ShopBranch;
use Illuminate\Support\Facades\DB;


class DefaultShopBranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private function generateServices($branch)
    {
        $services = [
            // Haircut services (category_id: 1)
            [
                'service_name' => 'Burst Fade',
                'cost' => 150.00,
                'duration' => '45 minutes',
                'service_category_id' => 1
            ],
            [
                'service_name' => 'Undercut',
                'cost' => 200.00,
                'duration' => '45 minutes',
                'service_category_id' => 1
            ],
            [
                'service_name' => 'Faded',
                'cost' => 200.00,
                'duration' => '45 minutes',
                'service_category_id' => 1
            ],
            // Nail services
            [
                'service_name' => 'Basic Manicure',
                'cost' => 250.00,
                'duration' => '45 minutes',
                'service_category_id' => 3
            ],
            [
                'service_name' => 'Not Basic Manicure',
                'cost' => 1000.00,
                'duration' => '1 hour',
                'service_category_id' => 3
            ]
        ];

        return array_map(function ($service) use ($branch) {
            return array_merge($service, [
                'branch_id' => $branch->id,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }, $services);
    }

    public function run(): void
    {


        // Query all shops
        $shops = Shop::all();

        foreach ($shops as $shop) {
            // Get category IDs for this shop
            $categoryIds = range(1, 4);
            // Generate random subset of category IDs for each shop
            $numCategories = rand(1, 4);
            $categoryIds = array_slice($categoryIds, 0, $numCategories);

            // Create 2-4 branches per shop
            $numBranches = rand(2, 4);

            for ($i = 1; $i <= $numBranches; $i++) {
                // Create branch
                $regions = ['Region IX', 'Region X', 'Region XI', 'NCR'];
                $provinces = ['Zamboanga del Sur', 'Misamis Oriental', 'Davao del Sur', 'Metro Manila'];
                $cities = ['Zamboanga City', 'Cagayan de Oro', 'Davao City', 'Manila'];
                $barangays = ['San Jose Gusu', 'Carmen', 'Poblacion', 'Malate'];

                $randomIndex = array_rand($regions);

                $branch = ShopBranch::create([
                    'shop_id' => $shop->id,
                    'branch_name' => $i === 1 ? "{$shop->shop_name} Main Branch" : "{$barangays[$randomIndex]} Branch",
                    'email' => strtolower($shop->shop_name) . $i . '@gmail.com',
                    'contact_number' => '+63' . rand(9000000000, 9999999999),
                    'region' => $regions[$randomIndex],
                    'province' => $provinces[$randomIndex],
                    'city' => $cities[$randomIndex],
                    'barangay' => $barangays[$randomIndex],
                    'detailed_address' => rand(100, 999) . ' ' . $barangays[$randomIndex] . ', ' . $cities[$randomIndex],
                ]);

                // Attach categories
                $branch->branchCategories()->attach($categoryIds, [
                    'created_at' => now(),
                    'updated_at' => now()
                ]);

                // Create operation hours for each branch
                $days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
                foreach ($days as $day) {
                    $isOpen = $day !== 'Sunday';
                    $openingHour = rand(6, 9);
                    $closingHour = rand(17, 21);

                    DB::table('operation_hours')->insert([
                        'branch_id' => $branch->id,
                        'day' => $day,
                        'is_open' => $isOpen,
                        'opening_time' => $isOpen ? sprintf('%02d:00:00', $openingHour) : null,
                        'closing_time' => $isOpen ? sprintf('%02d:00:00', $closingHour) : null,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }

        $appointmentTypeSets = [[1, 2, 3], [1, 3], [1, 2]];

        // Create appointment types for each branch
        foreach (ShopBranch::all() as $branch) {
            $selectedSet = array_values($appointmentTypeSets[array_rand($appointmentTypeSets)]);
            $appointmentTypeData = array_map(function ($id) use ($branch) {
                return [
                    'branch_id' => $branch->id,
                    'appointment_type_id' => $id,
                    'created_at' => now(),
                    'updated_at' => now()
                ];
            }, $selectedSet);

            DB::table('branch_appointment_types')->insert($appointmentTypeData);
        }

        // Create services for each branch
        foreach (ShopBranch::all() as $branch) {
            $services = $this->generateServices($branch);
            DB::table('branch_service_categories')->insert($services);
        }
    }
}
