<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopCategory extends Model
{
    //
    protected $shopCategories = [
        'shop_id',
        'barbershop',
        'beauty_salon',
        'nail_salon',
        'hair_salon',
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
