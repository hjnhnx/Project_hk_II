<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|min:7',
            'email' => 'required|email',
            'message' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng không bỏ qua trường này!',
            'name.min' => 'Vui lòng nhập tên đầy đủ!',
            'email.required' => 'Email sai định dạng, hoặc đang bỏ trống!',
            'message.required' => 'Hãy nhập nội dung!'
        ];
    }
}
