<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BranchCategory extends Model
{
    //
    protected $table = 'branch_branch_category';
    protected $fillable = [
        'branch_id',
        'branch_category_id'
    ];

    public function branch()
    {
        return $this->belongsTo(ShopBranch::class);
    }
}
