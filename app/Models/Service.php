<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'can_have_channel'
    ];

    public function plans()
    {
        return $this->hasMany(Plan::class);
    }

    public function getHasChannelsEmojiAttribute() {
        return $this->can_have_channel ? "✅" : "❌";
    }
}
