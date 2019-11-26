<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateEmployeeRequest extends FormRequest
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
            'name' => 'bail|required|max:50',
            'gender' => ['required', Rule::in(['Nam', 'Nữ', 'Khác'])],
            'avatar' => 'bail|nullable|image|mimes:jpeg, png, jpg, gif|max:10240',
        ];
    }
}
