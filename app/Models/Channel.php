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
        return $this->hasMany(ChannelPlan::class);
    }

    public function program()
    {
        return $this->hasMany(Program::class);
    }
}
