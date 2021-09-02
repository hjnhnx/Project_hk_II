<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
            'image'=>'required|url',
            'content'=>'required',
            'video'=>'nullable',
            'link_to_product'=>'required|url'
        ];
    }
    public function messages()
    {
        return [
            'image.required'=>'Vui lòng chọn ảnh',
            'image.url'=>'Vui lòng chọn ảnh đúng định dạng',
            'link_to_product.required'=>'Vui lòng không bỏ trống trường này',
            'link_to_product.url'=>'Vui lòng nhập đúng đường dẫn tới sản phẩm',
            'content.required'=>'Vui lòng nhập trường này'
        ];
    }
}
