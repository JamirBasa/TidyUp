<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopBranch extends Model
{
    //
    protected $table = 'shop_branch';
    protected $fillable = [
        'shop_id',
        'branch_name',
        'email',
        'contact_number',
        'region',
        'province',
        'city',
        'barangay',
        'detailed_address',
        'availability',
        'is_verified'
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }


    public function branchCategories()
    {
        return $this->belongsToMany(BranchCategory::class, 'branch_branch_category', 'branch_id', 'branch_category_id');
    }

    public function gallery()
    {
        return $this->hasMany(ShopGallery::class, 'branch_id');
    }

    public function branchAppointmentTypes()
    {
        return $this->belongsToMany(BranchAppointmentType::class, 'branch_appointment_types', 'branch_id', 'appointment_type_id');
    }
}
