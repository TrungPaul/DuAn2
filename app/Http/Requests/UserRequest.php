<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'name' => 'required',
            'email' =>['bail','required','email','max:255',
                Rule::unique('users')->ignore($this->id)],
            'avatar' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'phone_number' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
        ];
    }

    public function messages(){
        return [
            'name.required'    => 'Tên của bạn không được để trống',
            'email.required' => "Không được để trống",
            'email.email'=> "Email không đúng định dạng",
            'email.max' => "Email không quá 255 ký tự",
            'avatar.mimes' => "Đuôi của avatar phải là jpeg, png, jpg, gif, svg",
            'avatar.max' => "Độ lớn của ảnh nhỏ hơn 2048",
            'phone_number.required'   => 'Số điện thoại không được để trống',
            'date_of_birth.required'   => 'Ngày tháng năm sinh không được để trống',
        ];
    }
}
