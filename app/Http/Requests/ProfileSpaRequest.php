<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ProfileSpaRequest extends FormRequest
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
            'city_id' => 'bail|required|not_in:0',
            'location' => 'required',
            'phone' => 'required',
            'image' => 'bail|nullable|mimes:jpeg,png,jpg,gif,svg',
            'email' => ['bail', 'required', 'email', 'max:255',
                Rule::unique('spas')->ignore(Auth::guard('spa')->user()->id)],
        ];
    }

    public function messages()
    {
        return [
            'location.required' => 'Địa chỉ không được để trống'
        ];
    }
}
