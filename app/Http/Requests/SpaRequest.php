<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpaRequest extends FormRequest
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
            'city_id' => 'required|not_in:0',
            'location' => 'required',
            'phone' => 'bail|required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:11',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'email' => 'bail|required|email|max:255|unique:spas',
            'password' => 'required|min:6',
            'pwd' => 'required|same:password',
            'remember' =>'required'
        ];
    }

    public function messages(){
        return [
            'name.required'    => 'Tên không được để trống',
            'city_id.required'   => 'Bạn phải chọn thành phố',
            'city_id.not_in'   => 'Bạn phải chọn thành phố',
            'location.required'   => 'Địa chỉ không được để trống',
            'phone.required' => "Số điện thoại không được để trống",
            'phone.regex' => "Số điện thoại không hợp lệ",
            'phone.min' => "Số điện thoại phải là 10 số",
            'phone.max' => "Số điện thoại tối đa là 11 số",
            'image.required' => "Ảnh không được để trống",
            'image.mimes' => "Đuôi của ảnh phải là jpeg, png, jpg, gif, svg",
            'email.required' => "Email không được để trống",
            'email.email'=> "Email không đúng định dạng",
            'email.max' => "Email không quá 255 ký tự",
            'email.unique' => "Email đã tồn tại",
            'password.required' => "Mật khẩu không được để trống",
            'password.min' => "Mật khẩu tối thiều 6 ký tự",
            'pwd.required' => "Không được để trống",
            'pwd.same' => "Mật khẩu không trùng khớp",
            'remember.required' => "Vui lòng cam đoan với chúng tôi"
        ];
    }
}
