<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Website_InfoRequest extends FormRequest
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
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'facebook' => 'required',
            'viber' => 'required',
            'is_disable_website' => 'required',
            'is_disable_app' => 'required',
        ];
    }
}
