<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    //
    protected $fillable = [
        'user_id', 'shop_name', 'contact_number', 'email', 'description', 'status'
    ];

    public function addresses()
    {
        return $this->hasOne(Address::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(ShopCategory::class, 'shop_shop_category');
    }


}
