<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;

class HandlePayConfirmRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'agree' => ['required', 'boolean'],
            'reason' => ['required_if:aggree,false']
        ];
    }

}
