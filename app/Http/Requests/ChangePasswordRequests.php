<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequests extends FormRequest
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
            'password' => 'required',
            'newpassword' => 'required|min:6|max:100',
            'repassword' => 'required|required_with:newpassword|same:newpassword'
        ];
    }

    public function messages(){
        return [
            'password.required'         => 'Mật khẩu không được để trống',
            'newpassword.required'      => 'Không được để trống',
            'newpassword.min'           => 'Mật khẩu phải có 6 kí tự',
            'newpassword.max'           => 'Mật khẩu có ít hơn kí tự',
            'repassword.required'       => 'Không được để trống',
            'repassword.same'           => 'Mật khẩu không đúng'
        ];
    }
}
