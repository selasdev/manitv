<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'service_id',
        'description'
    ];

    public function packages()
    {
        return $this->hasMany(PackagePlan::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function channels()
    {
        return $this->hasMany(ChannelPlan::class);
    }


    public function getPriceFormattedAttribute()
    {
        return number_format($this->price, 2) . '$';
    }
}
