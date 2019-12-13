<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'email' => 'required|email',
            'phone' => "required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:11",
            'content' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'  => 'Tên không được để trống',
            'email.required'  => 'Email không được để trống',
            'email.email' => 'Email không hợp lệ',
            'phone.required' => 'Số điện thoại không được bỏ trống',
            'phone.regex' => 'Số điện thoại không hợp lệ',
            'phone.min' => 'Số điện thoại phải là 10 số',
            'phone.max' => 'Số điện thoại tối đa là 11 số',
            'content.required'    => 'Nội dung không được để trống',
        ];
    }
}
