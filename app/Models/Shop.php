<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    //
    protected $fillable = [
        'user_id',
        'shop_name',
        'address',
        'contact_number',
        'email',
        'description',
        'status',
    ];
}
