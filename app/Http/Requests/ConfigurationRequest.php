<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfigurationRequest extends FormRequest
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
            'ram'=>'required|numeric',
            'storage'=>'required|numeric'
        ];
    }
    public function messages()
    {
        return [
            'ram.required'=>'Vui lòng nhập vào thông số RAM',
            'ram.numeric'=>'Vui lòng nhập vào thông số RAM là một số nguyên',
            'storage.required'=>'Vui lòng nhập vào thông số bộ nhớ',
            'storage.numeric'=>'Vui lòng nhập vào thông số bộ nhớ là một số nguyên',
        ];
    }
}
