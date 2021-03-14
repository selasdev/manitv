<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

class ChannelEditRequest extends ChannelRequest
{

    public function rules()
    {
        $rules = parent::rules();
        $rules['name'] = [
            'required',
            Rule::unique('channels')->ignore($this->channel->id)
        ];

        $rules['number'] = [
            'required',
            Rule::unique('channels')->ignore($this->channel->id)
        ];

        return $rules;
    }
}
