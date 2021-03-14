<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

class PlanEditRequest extends PlanRequest
{

    public function rules()
    {
        $rules = parent::rules();
        $rules['name'] = [
            'required',
            Rule::unique('plans')->ignore($this->plan->id)
        ];

        return $rules;
    }
}
