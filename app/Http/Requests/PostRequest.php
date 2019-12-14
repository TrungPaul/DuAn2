<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|max:191',
            'image' => 'mimes:jpeg,png,jpg,gif,svg',
            'description' => 'required',
            'content' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => "Không được để trống",
            'title.min' => "Tiêu đề tối thiểu 5 ký tự",
            'title.max' => "Tiêu đề tối đa 191 ký tự",
            'description.required' => "Không được để trống",
            'image.mimes' => "Đuôi của avatar phải là jpeg, png, jpg, gif, svg",
            'content.required' => "Không được bỏ trống",
        ];
    }
}
