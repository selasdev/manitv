<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackagePlan extends Model
{
    use HasFactory;

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function plan()
    {
        return $this->habelongsTosOne(Plan::class);
    }
}
