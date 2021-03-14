<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->user()->role === "admin";
    }

    public function rules()
    {
        return [
            'name' => 'required|unique:services',
            'canAddChannels' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre del servicio es requerido',
            'name.unique' => 'El nombre del servicio ya existe',
        ];
    }
}
