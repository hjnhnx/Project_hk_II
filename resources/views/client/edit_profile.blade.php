@extends('client.layouts.master')
@section('title','Trang Chủ')
@section('title_form',$user ?'Edit profile' :'Create edit_profile')
@section('custom_style')
    <style>
        .head_form > div {
            font-size: 25px;
            font-weight: bold;
            padding-top: 10px;
            cursor: pointer;
        }
        .error{
            color: red;
        }
    </style>
@endsection
@section('main_content')
    <div class="col-12 head_form row m-0 p-0 d-flex justify-content-center">
        <div style="border: #bdbcbc solid 1px" class="m-5">
            <div class="col-3 d-flex justify-content-center btn_show_register"></div>
            <form id="register" class="col-12 pt-3 pl-4 pr-4" action="{{route('update_profile')}}" method="post">
                @csrf
                <div class="row">
                    <div class="form-group col-12 col-md-6">
                        <label for="">Họ tên đệm</label>
                        <label>
                            <input value="{{$user->firstname}}" name="firstname" type="text" class="form-control">
                        </label>
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="">Tên</label>
                        <input value="{{$user->lastname}}" name="lastname" type="text" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-12 col-md-6">
                        <label for="">Số điện thoại</label>
                        <input value="{{$user->phone}}" name="phone" type="text" class="form-control">
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="">Ngày sinh</label>
                        <input value="{{$user->birthday}}" name="birthday" type="date" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-12 col-md-6">
                        <label for="">Mật khẩu</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="">Nhập lại mật khẩu</label>
                        <input type="password" class="form-control" name="Confirm_Password">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-12 col-md-12">
                        <label for="">Email</label>
                        <input value="{{$user->email}}" name="email" type="text" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-12 col-md-12">
                        <label for="">Địa chỉ</label>
                        <textarea class="form-control" name="address" id="" cols="30" rows="2">{{$user->address}}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-12 col-md-6">
                        <label for="">Avatar</label>
                        <input type="hidden" name="avatar" value="{{$user->avatar}}">
                        <button type="button" class="btn btn-warning form-control">Chọn ảnh</button>
                    </div>
                    <div class="form-group col-12 col-md-6 d-flex justify-content-center">
                        <img src="{{$user->avatar}}" alt="" style="height: 100px;width: 100px;border-radius: 5px;object-fit: cover">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-12">
                        <button class="btn-primary btn form-control">Cập Nhật</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('custom_js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script>
        $('#register').validate({
            rules: {
                firstname: {
                    required: true,
                    minlength: 2,
                },
                lastname: {
                    required: true,
                    minlength: 2,
                },
                phone: {
                    required: true,
                    minlength: 9,
                    maxlength: 12
                },
                birthday: {
                    required: true,
                },
                email: {
                    required: true,
                    minlength: 10,
                    email: true
                },
                address: {
                    required: true,
                    minlength: 20,
                },
                password: {
                    required: true,
                    minlength: 6,
                },
                Confirm_Password: {
                    required: true,
                    equalTo: "#password"
                }
            },
            messages:{
                firstname: {
                    required: 'Họ tên là bắt buộc',
                    minlength: 'Vui lòng nhập họ tên đầy đủ',
                },
                lastname: {
                    required: 'Tên không được bỏ trống',
                    minlength: 'Vui lòng nhập tên đầy đủ',
                },
                phone: {
                    required: 'Số điện thoại là bắt buộc',
                    minlength: 'Số điện thoại sai định dạng',
                    maxlength: 'Số điện thoại sai định dạng'
                },
                birthday: {
                    required: 'Nhập ngày sinh của bạn',
                },
                email: {
                    required: 'Email không được bỏ trống',
                    minlength: 'Email sai định dạng',
                    email: 'Email sai định dạng'
                },
                address: {
                    required: 'Vui lòng nhập địa chỉ',
                    minlength: 'Vui lòng nhập địa chỉ cụ thể',
                },
                password: {
                    required: 'Mật khẩu không được bỏ trống',
                    minlength: 'Mật khẩu cần ít nhất 6 kí tự',
                },
                Confirm_Password:{
                    required: 'Vui lòng nhập lại Password',
                    equalTo: 'Mật khẩu không khớp'
                }
            }
        })
    </script>
@endsection
