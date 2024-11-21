<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OperatingHours extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'day',
        'is_open',
        'opening_time',
        'closing_time'
    ];

    protected $casts = [
        'is_open' => 'boolean',
        'opening_time' => 'datetime',
        'closing_time' => 'datetime'
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
