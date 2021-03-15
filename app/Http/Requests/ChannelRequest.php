<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChannelRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->role === "admin";
    }

    public function rules()
    {
        return [
            'name' => 'required|unique:channels',
            'number' => 'required|unique:channels|gt:0'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Channel name cannot be empty',
            'name.unique' => 'Channel name already exists',
            'number.required' => 'Number cannot be empty',
            'number.unique' => 'A channel with this number already exists',
            'number.gt' => 'The channel number must be a positive value'
        ];
    }
}
