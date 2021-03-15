<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ProgramEditRequest extends ProgramRequest
{
    public function rules()
    {
        $rules = parent::rules();
        $rules['name'] = [
            'required',
            Rule::unique('programs')->ignore($this->program->id)
        ];

        return $rules;
    }
}
