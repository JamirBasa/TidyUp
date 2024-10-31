<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
    'region',            
    'province',         
    'city',              
    'barangay',          
    'detailed_address'
    ];
}
