<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BranchAppointmentType extends Model
{
    //
    protected $table = 'branch_appointment_types';

    protected $fillable = [
        'branch_id',
        'appointment_type_id'
    ];

    public function branch()
    {
        return $this->belongsTo(ShopBranch::class, 'branch_id');
    }
}
