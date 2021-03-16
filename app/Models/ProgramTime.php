<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramTime extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_id',
        'time_start',
        'time_end',
        'day'
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    private function createReadableTime($time)
    {
        $hours = intval($time / 60);
        $minutes = intval($time % 60);
        if($hours < 10) {
            $hours = "0$hours";
        }
        if ($minutes < 10) {
            $minutes = "0$minutes";
        }

        return "$hours:$minutes";
    }

    public function getStartHumanAttribute()
    {
        return $this->createReadableTime($this->time_start);
    }


    public function getEndHumanAttribute()
    {
        return $this->createReadableTime($this->time_end);
    }
}
