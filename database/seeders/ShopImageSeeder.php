<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use App\Models\ShopBranch;

class ShopImageSeeder extends Seeder
{
    public function run()
    {
        // Create storage directory if it doesn't exist
        Storage::disk('public')->makeDirectory('shop-gallery');

        $branches = ShopBranch::all();
        foreach ($branches as $branch) {
            $this->copyAndSeedImages($branch);
        }
    }

    private function copyAndSeedImages($branch)
    {
        $sourceImages = [
            public_path('assets/images/shops/1.png'),
            public_path('assets/images/shops/2.png'),
            public_path('assets/images/shops/3.png'),
            public_path('assets/images/shops/4.png'),
            public_path('assets/images/shops/5.png'),
            public_path('assets/images/shops/6.png'),
            public_path('assets/images/shops/7.png'),
            public_path('assets/images/shops/8.png'),
            public_path('assets/images/shops/9.png'),
            public_path('assets/images/shops/10.png'),
            public_path('assets/images/shops/11.png'),
            public_path('assets/images/shops/12.png'),
            public_path('assets/images/shops/13.png'),
        ];

        // Get 3 random images
        $randomSourceImages = array_rand($sourceImages, 3);
        $images = [];

        foreach ($randomSourceImages as $index) {
            // Generate unique filename
            $filename = "shop-{$branch->id}-{$index}.jpg";
            $destinationPath = "shop-gallery/{$filename}";

            // Copy file to storage
            Storage::disk('public')->put(
                $destinationPath,
                File::get($sourceImages[$index])
            );

            $images[] = [
                'branch_id' => $branch->id,
                'filename' => $filename,
                'path' => $destinationPath,
                'url' => Storage::url($destinationPath),
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        DB::table('shop_gallery')->insert($images);
    }
}
