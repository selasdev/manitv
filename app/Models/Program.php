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
        return $this->hasMany(ProgramTime::class, 'program_id', 'id')
            ->orderBy('time_start');
    }

    public function getTimesByDayAttribute() {
        return [
            'Monday' => $this->filterByDay('Monday'),
            'Tuesday' => $this->filterByDay('Tuesday'),
            'Wednesday' => $this->filterByDay('Wednesday'),
            'Thursday' => $this->filterByDay('Thursday'),
            'Friday' => $this->filterByDay('Friday'),
            'Saturday' => $this->filterByDay('Saturday'),
            'Sunday' => $this->filterByDay('Sunday'),
        ];
    }

    public function filterByDay($day) {
        return $this->times->filter(function(ProgramTime $programTime) use($day) {
            return ($programTime->day == $day);
        });
    }
}
