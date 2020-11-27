<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'username' => trans('validation.attribute.username'),
            'email' => trans('validation.attribute.email'),
            'password' => trans('validation.attribute.password'),
            're_password' => trans('validation.attribute.re_password'),
            'fullname' => trans('validation.attribute.fullname'),
            'birthday' => trans('validation.attribute.birthday'),
            'phone' => trans('validation.attribute.phone'),
            'facebook' => trans('validation.attribute.facebook'),
            'avatar' => trans('validation.attribute.avatar'),
        ];
    }
    public function messages()
    {
        return [
            'username.required' => trans('validation.required'),
            'username.max' => trans('validation.max'),
            'username.min.string' => trans('validation.min'),
            'username.unique' => trans('validation.unique'),
            'email.required' => trans('validation.required'),
            'email.unique' => trans('validation.unique'),
            'email.max.string' => trans('validation.max'),
            'password.required' => trans('validation.required'),
            'password.min.string' => trans('validation.min'),
            're_password.required' => trans('validation.required'),
            're_password.min.string' => trans('validation.min'),
            're_password.same' => trans('validation.same'),
            'fullname.required' => trans('validation.required'),
            'fullname.string' => trans('validation.string'),
            'fullname.max.string' => trans('validation.max'),
            'birthday.required' => trans('validation.required'),
            'birthday.date' => trans('validation.date'),
            'phone.required' => trans('validation.required'),
            'phone.regex' => trans('validation.regex'),
            'avatar.required' => trans('validation.required'),
            'avatar.image' => trans('validation.image'),
            'facebook.required' => trans('validation.required'),
        ];
    }
    public function rules()
    {
        return [
            'username' => 'bail|required|max:255|min:6|unique:users',
            'email' => 'bail|required|email|max:255|unique:users',
            'password' => 'bail|required|min:8',
            're_password' => 'bail|required|min:8|same:password',
            'fullname' => 'bail|required|string|max:255',
            'birthday' => 'bail|required|date',
            'phone' => 'bail|required',
            'avatar' => 'bail|required|image',
            'facebook' => 'bail|required', 
        ];
    }
}
