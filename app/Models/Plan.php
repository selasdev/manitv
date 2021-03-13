<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    public function package()
    {
        return $this->hasOne(PackagePlan::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function channels()
    {
        return $this->hasMany(ChannelPlan::class);
    }
}
