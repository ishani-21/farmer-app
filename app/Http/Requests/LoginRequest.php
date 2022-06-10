<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'raw_mobile' => 'required|numeric|digits:10'
        ];
    }
    public function messages()
    {
        return [
            'raw_mobile.required' => 'The Mobile Filed is required',
            'raw_mobile.numeric' => 'Please enter only Number',
            'raw_mobile.digits' => 'Please enter maximum 10 number'
        ];
    }
}
