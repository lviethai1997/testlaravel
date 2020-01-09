<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'txtEmail' => 'required',
            'txtPassword' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'txtEmail.required' => 'Enter your email,please',
            'txtPassword.required'=> 'Enter your password,please'
        ];
    }
}
