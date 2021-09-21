@extends('client.layouts.master')
@section('title','Trang Chủ')
@section('custom_style')
    <style>
        .form_container {
            height: 600px;
            margin: 30px 0;
            transition: 0.4s;
        }
        .form_container > div {
            overflow: hidden;
        }
        .head_form > div {
            font-size: 25px;
            font-weight: bold;
            padding-top: 10px;
            cursor: pointer;
        }
        .head_form > p {
            height: 4px;
            background: #ff3030;
            padding: 2px 0 0 0 ;
            margin-top: 7px;
            transition: 0.4s;
        }
        .content_form > div{
            width: 200%;
            transition: 0.4s;
        }
        .error {
            color: #f55050;
        }
    </style>
@endsection
@section('main_content')
    <div class="container wrap-form-account">
        @if(session('msg_error'))
            <div class="alert alert-danger alert-dismissible" style="margin-top: 10px">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Error </strong>{{session('msg_error')}}
            </div>
        @endif
        @if(session('msg_authentication'))
                <div class="alert alert-warning mt-5" role="alert">
                    Bạn phải đăng nhập để có thể tiếp tục
                </div>
        @endif

        <div class="col-12 form_container d-flex justify-content-center" >
            <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-6 border">
                <div class="col-12 p-0">
                    <div class="col-12 head_form row m-0 p-0">
                        <div class="col-6 d-flex justify-content-center btn_show_login text-danger">Đăng nhập</div>
                        <div class="col-6 d-flex justify-content-center btn_show_register">Đăng ký</div>
                        <p class="col-6 border under_line_form"></p>
                    </div>
                    <div class="col-12 content_form p-0 m-0">
                        <div class="row m-0">
                            <form id="login" class="col-6 pt-5 pl-5 pr-5" action="{{route('user_login')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="">Email</label>
                                        <input type="text" name="email" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="">Mật khẩu</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                </div>
                                <br><br>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <button class="btn-danger btn form-control">Đăng nhập</button>
                                    </div>
                                </div>
                            </form>
                            <form id="register" class="col-6 pt-3 pl-4 pr-4" action="{{route('register')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-12 col-md-6">
                                        <label for="">Họ tên đệm</label>
                                        <input name="firstname" type="text" class="form-control">
                                    </div>
                                    <div class="form-group col-12 col-md-6">
                                        <label for="">Tên</label>
                                        <input name="lastname" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12 col-md-6">
                                        <label for="">Số điện thoại</label>
                                        <input name="phone" type="text" class="form-control">
                                    </div>
                                    <div class="form-group col-12 col-md-6">
                                        <label for="">Ngày sinh</label>
                                        <input name="birthday" type="date" class="form-control">
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
                                        <input name="email" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12 col-md-12">
                                        <label for="">Địa chỉ</label>
                                        <textarea class="form-control" name="address" id="" cols="30" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12 col-md-6">
                                        <label for="">Avatar</label>
                                        <input type="hidden" name="avatar" value="https://www.minervastrategies.com/wp-content/uploads/2016/03/default-avatar.jpg">
                                        <button type="button" class="btn btn-warning form-control">Chọn ảnh</button>
                                    </div>
                                    <div class="form-group col-6 d-flex justify-content-center">
                                        <img src="https://www.minervastrategies.com/wp-content/uploads/2016/03/default-avatar.jpg" alt="" style="height: 100px;width: 100px;border-radius: 5px">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-12">
                                        <button class="btn-primary btn form-control">Đăng Ký</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection

@section('custom_js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script>
        $('.btn_show_register').click(function (){
            $('.under_line_form').css('transform','translateX(100%)')
            $('.btn_show_register').addClass('text-danger')
            $('.btn_show_login').removeClass('text-danger')
            $('.content_form > div').css('transform','translateX(-50%)')
            $('.form_container').css('height','800px')
        })
        $('.btn_show_login').click(function (){
            $('.under_line_form').css('transform','translateX(0%)')
            $('.btn_show_login').addClass('text-danger')
            $('.btn_show_register').removeClass('text-danger')
            $('.content_form > div').css('transform','translateX(0%)')
            $('.form_container').css('height','600px')
        })

        $('#login').validate({
            rules:{
                email :{
                    required : true
                },
                password :{
                    required : true
                }
            },
            messages :{
                email :{
                    required : 'Vui lòng nhập email'
                },
                password :{
                    required : 'Vui lòng nhập mật khẩu'
                }
            }
        })

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
