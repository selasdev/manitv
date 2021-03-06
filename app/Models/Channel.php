<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'number'
    ];

    public function plans()
    {
        return $this->belongsToMany(Plan::class, 'channel_plans', 'channel_id', 'plan_id');
    }

    public function programs()
    {
        return $this->hasMany(Program::class);
    }
}
