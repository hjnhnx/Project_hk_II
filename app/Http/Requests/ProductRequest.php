<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name'=>'required|min:5|max:20',
            'description'=>'required|min:5|max:20',
            'discount'=>'nulllable|numeric',
            'subcategory_id'=>'required',
            'slug'=>'required',
            'price'=>'required|numeric'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Vui lòng không để trống trường này.',
            'name.min'=>'Tên không được nhỏ hơn 5 ký tự',
            'name.max'=>'Tên không được vượt quá 20 ký tự ',
            'description.required'=>'Vui lòng không để trống trường này.',
            'description.min'=>'Mô tả không được nhỏ hơn 5 ký tự',
            'description.max'=>'Mô tả không được vượt quá 20 ký tự',
            'discount.numeric'=>'Vui lòng nhập giá trị số cho trường này.',
            'subcategory_id.required'=>'Vui lòng không để trống trường này.',
            'slug.required'=>'Vui lòng không để trống trường này.',
            'price.required'=>'Vui lòng nhập vào giá sản phẩm',
            'price.numeric'=>'Giá của sản phẩm phải là số'
        ];
    }
}
