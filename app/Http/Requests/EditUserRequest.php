<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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
            'fullname.required' => trans('validation.required'),
            'fullname.string' => trans('validation.string'),
            'fullname.max.string' => trans('validation.max'),
            'birthday.required' => trans('validation.required'),
            'birthday.date' => trans('validation.date'),
            'phone.required' => trans('validation.required'),
            'avatar.required' => trans('validation.required'),
            'avatar.image' => trans('validation.image'),
            'facebook.required' => trans('validation.required'),
        ];
    }
    public function rules()
    {
        return [
            'fullname' => 'bail|required|string|max:255',
            'birthday' => 'bail|required|date',
            'phone' => 'bail|required',
            'avatar' => 'bail|required|image',
            'facebook' => 'bail|required', 
        ];
    }
}
