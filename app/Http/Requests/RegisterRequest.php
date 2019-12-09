<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'password' => 'required|min:6',
            'pwd' => 'required|same:password',
            'gender' => ['required', Rule::in(['1', '2', '3'])],
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
        ];
    }
}
