<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PackageUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => ['required', 'numeric'],
            'package_id' => ['required', 'numeric'],
            'state' => ['required', 'string', 'max:255']
        ];
    }
}
