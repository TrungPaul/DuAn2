<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'service_detail_id' => 'required'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Không được để trống tên',
            'email.required' => 'Không được để trống email',
            'service_detail_id.required' => 'Không được để trống dịch vụ',
            'email.email' => 'Email không đúng định dạng'

        ];
    }
}
