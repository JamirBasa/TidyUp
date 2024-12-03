<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shop;
use App\Models\ShopAccount;

class DefaultShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $shopDetail = [
            ['shop_name' => 'Tidy Up Official'],
            ['shop_name' => 'Art\'s Canvas'],
            ['shop_name' => 'Dave\'s Beauty Salon'],
            ['shop_name' => 'Gio\'s Barbershop'],
            ['shop_name' => 'Paul\'s Nail Salon'],
            ['shop_name' => 'Mosses\' Hair Salon'],
        ];
        $i = 1;
        foreach ($shopDetail as $shop) {
            $shop = Shop::create($shop);
            ShopAccount::create([
                'shop_owner_id' => $i,
                'shop_id' => $shop->id,
            ]);
            $i++;
        }
    }
}
