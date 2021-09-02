<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'firstname'=>'required',
            'lastname'=>'required|max:8',
            'avatar'=>'required|url',
            'address'=>'required|min:20',
            'phone'=>'required|min:8|max:12',
            'birthday'=>'required|date',
            'email'=>'required|email',
            'password'=>'required|min:6|max:24',
        ];
    }
    public function messages()
    {
        return [
            'firstname.required'=>'Vui lòng nhập vào trường này!',
            'lastname.required'=>'Vui lòng không bỏ trống tên!',
            'lastname.max'=>'Tên không đúng định dạng!',
            'avatar.required'=>'Vui lòng chọn ảnh!',
            'avatar.url'=>'Vui lòng chọn ảnh đúng định dạng',
            'address.required'=>'Vui lòng không bỏ trống địa chỉ!',
            'address.min'=>'Vui lòng nhập địa chỉ chi tiết!',
            'phone.required'=>'Vui lòng không bỏ trống số điện thoại!',
            'phone.min'=>'Số điện thoại không đúng định dạng!',
            'phone.max'=>'Số điện thoại không đúng định dạng!',
            'birthday.required'=>'Không được bỏ trống trường này!',
            'birthday.date'=>'Sai định dạng ngày tháng năm!',
            'email.required'=>'Không được bỏ trống trường này!',
            'email.email'=>'Sai định dạng email!',
            'password.required'=>'Mật khẩu là bắt buộc!',
            'password.min'=>'Mật khẩu không ngắn hơn 6 kí tự!',
            'password.max'=>'Mật khẩu không dài hơn 24 kí tự!',
        ];
    }
}
