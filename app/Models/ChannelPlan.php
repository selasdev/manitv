<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChannelPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'channel_id',
        'plan_id'
    ];

    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
