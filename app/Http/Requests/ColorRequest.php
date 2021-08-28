<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ColorRequest extends FormRequest
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
            'name'=>'required',
            'color_code'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Vui lòng không bỏ trống trường này',
            'color_code.required'=>'Vui lòng không bỏ trống trường này',
        ];
    }
}
