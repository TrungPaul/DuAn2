<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|min:4',
            'email' => 'required|min:4',
            'avatar' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'phone' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
        ];
    }

    public function messages(){
        return [
            'name.required'    => 'Tên của bạn không được để trống',
            'email.required'   => 'Email không được để trống',
            'phone.required'   => 'Số điện thoại không được để trống',
        ];
    }
}
