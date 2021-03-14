<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'price',
    ];

    public function user()
    {
        return $this->hasOne(PackageUser::class);
    }

    public function plans()
    {
        return $this->hasMany(PackagePlan::class);
    }

    public function getGetPriceAttribute()
    {
        return "$ $this->price,00";
    }
}
