<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProgramAddRequest extends FormRequest
{
    public $validDays = ['Monday', 'Tuesday', 'Thursday', 'Wednesday', 'Friday', 'Sunday', 'Saturday'];
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->role === "admin";
    }

    /**
     * Modify the input values
     *
     * @return void
     */
    protected function prepareForValidation()
    {

        $attrs = $this->all();
        $attrs['day'] = ucfirst($attrs['day']);
        $hours = $this->transformHoursAndMinutes();
        $attrs['time_start'] = $hours[0];
        $attrs['time_end'] = $hours[1];
        $this->replace($attrs);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $attrs = $this->all();
        $end = $attrs['time_end'];
        $start = $attrs['time_start'];
        return [
            'program_id' => 'required',
            'time_start' => "required|lt:$end",
            'time_end' => "required|gt:$start",
            'day' => Rule::in($this->validDays)
        ];
    }

    public function transformHoursAndMinutes()
    {
        $attrs = $this->all();
        $hourMinuteStart = explode(':', $attrs['time_start']);
        $hourMinuteEnd = explode(':', $attrs['time_end']);
        $hourMinuteStart = intval($hourMinuteStart[0]) * 60 + intval($hourMinuteStart[1]);
        $hourMinuteEnd = intval($hourMinuteEnd[0]) * 60 + intval($hourMinuteEnd[1]);

        return [$hourMinuteStart, $hourMinuteEnd];
    }
}
