<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopAddress extends Model
{
    //
    protected $fillable = [
        'shop_id', 'region', 'province', 'city', 'barangay', 'detailed_address'
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
