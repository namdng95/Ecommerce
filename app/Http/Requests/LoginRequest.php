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
    public function attributes()
    {
        return [
            'email' => trans('validation.attribute.email'),
            'password' => trans('validation.attribute.password'),
        ];
    }
    public function messages()
    {
        return [
            'email.required' => trans('validation.required'),
            'email.max.string' => trans('validation.max'),
            'email.email' => trans('validation.mail'),
            'password.required' => trans('validation.required'),
            'password.min.string' => trans('validation.min'),
        ];
    }
    public function rules()
    {
        return [
            'email' => 'bail|required|email|max:255',
            'password' => 'bail|required|min:8',
        ];
    }
}
