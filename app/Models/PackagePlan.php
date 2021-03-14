<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackagePlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'plan_id',
        'package_id',
    ];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
