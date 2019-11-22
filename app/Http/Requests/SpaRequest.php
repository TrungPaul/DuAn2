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
            'location' => 'required',
            'phone' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'remember' =>'required'
        ];
    }

    public function messages(){
        return [
            'name.required'    => 'Tên không được để trống',
            'location.required'   => 'Địa chỉ không được để trống',
            'phone.required' => "Số điện thoại không được để trống",
            'image.required' => "Ảnh không được để trống",
            'image.mimes' => "Đuôi của ảnh phải là jpeg, png, jpg, gif, svg",
            'remember.required' => "Vui lòng cam đoan với chúng tôi"
        ];
    }
}
