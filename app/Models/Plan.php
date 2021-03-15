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
        return $this->belongsToMany(Channel::class, 'channel_plans', 'plan_id', 'channel_id');
    }


    public function getPriceFormattedAttribute()
    {
        return number_format($this->price, 2) . '$';
    }

    public function getCanHaveChannels() {
        return $this->service->can_have_channel;
    }
}
