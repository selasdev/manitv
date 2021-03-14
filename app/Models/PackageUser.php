<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'package_id',
        'state',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function getGetStateAttribute()
    {
        if ($this->state === "waiting") {
            return "Waiting 😴";
        } else if ($this->state === "approved") {
            return "Approved 🤑";
        } else if ($this->state === "rejected") {
            return "Rejected ❌";
        } else {
            return "Expired 😳";
        }
    }
}
