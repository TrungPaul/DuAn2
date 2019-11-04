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
    public function rules()
    {
        return [
            'name' => "required",
            'email' => 'bail|required|email|max:255|unique:users',
            'password' => 'required',
            'pwd' => 'required|same:password',
            'gender' => 'required',
            'remember' =>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Không được để trống",
            'email.required' => "Không được để trống",
            'email.email'=> "Email không đúng định dạng",
            'email.max' => "Email không quá 255 ký tự",
            'email.unique' => "Email tài khoản đã tồn tại",
            'password.required' => "Không được để trống",
            'pwd.required' => "Không được để trống",
            'pwd.same' => "Mật khẩu không trùng khớp",
            'gender.required' => "Vui lòng chọn một giới tính",
            'remember.required' => "Vui lòng chấp nhận điều khoản của chúng tôi"
        ];
    }
}
