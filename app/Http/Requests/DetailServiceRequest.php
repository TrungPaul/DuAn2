<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DetailServiceRequest extends FormRequest
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
                'name_service' => 'required',
                'service_id' => 'required',
                'price_service' => 'bail|required|integer|regex:/[1-9]/|between:0,9999999',
                'discount' => 'bail|required|integer|regex:/[1-9]/|between:0,99',
                'detail_service' => 'required',
                'image_service' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'name_service.required' => 'Tên dịch vụ không được bỏ trống',
            'service_id.required' => 'Danh mục dịch vụ không được bỏ trống',
            'price_service.integer' => 'Giá dịch vụ không hợp lệ',
            'price_service.regex' => 'Giá dịch vụ không hợp lệ',
            'price_service.between'=> 'Giá dịch vụ từ 1 - 10.000.000VNĐ',
            'discount.integer' => 'Giá dịch vụ không hợp lệ',
            'discount.regex' => 'Khuyến mại không hợp lệ',
            'discount.between'=> 'Khuyến mãi dịch vụ từ 1 - 99%',
            'detail_service.required' => 'Chi tiết dịch vụ không được bỏ trống',
            'image_service.required' => 'Ảnh dịch vụ không được bỏ trống',

        ];
    }
}
