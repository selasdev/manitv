<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasOne(PackageUser::class);
    }

    public function plans()
    {
        return $this->hasMany(PackagePlan::class);
    }
}
