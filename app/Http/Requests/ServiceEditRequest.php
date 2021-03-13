<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ServiceEditRequest extends ServiceRequest {

    public function rules() {
        $rules = parent::rules();
        $rules['name'] = [
            'required',
            Rule::unique('services')->ignore($this->service->id)
        ];

        return $rules;
    }

}