<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'channel_id'
    ];

    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }

    public function times()
    {
        return $this->hasMany(ProgramTime::class);
    }
}
