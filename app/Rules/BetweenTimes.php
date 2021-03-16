<?php

namespace App\Rules;

use App\Models\ProgramTime;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class BetweenTimes implements Rule
{
    public $timeStart;
    public $timeEnd;
    public $day;

    public function __construct($timeStart, $timeEnd, $day)
    {
        $this->timeStart = $timeStart;
        $this->timeEnd = $timeEnd;
        $this->day = $day;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $arrayMatches = ProgramTime::where('day', '=', $this->day)
            ->where('time_start', '<=' ,$this->timeStart)
            ->whereBetween('time_end', [$this->timeStart, $this->timeEnd])
            ->get();
        return count($arrayMatches) == 0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        $day = $this->day;
        return "There's a program scheduled between the times you selected at $day";
    }
}
