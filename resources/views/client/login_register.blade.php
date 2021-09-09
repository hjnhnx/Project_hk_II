@extends('client.layouts.master')
@section('title','Trang Chủ')
@section('custom_style')
    <style>
        .wrap-form-account {
            height: 700px;

        }
        .error{
            color: red;
        }

        #formaccount {
            position: relative;
        }
        #login {
            transform: translateX(0px
            );
        }

        #login, #register {
            position: absolute;
            width: 33%;
            top: 66px;
            transition: transform .4s;
        }

        #register {
            left: -45px;
            opacity: 0;
        }
        #indicator {
            height: 3px;
            width: 87px;
            background: black;
            margin: 10px 0;
            transition: transform .4s;
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
        <div class="d-flex justify-content-center" id="formaccount">
            <div class="text-center" style="font-size: 20px;cursor: pointer">
                <span class="p-2 mx-2" onclick="login()">Login</span>
                <span class="p-2 mx-2" onclick="register()">Register</span>
                <hr id="indicator">
            </div>
            <form id="login" action="{{route('user_login')}}" method="post" name="dang_nhap">
                @csrf
                <div class="form-group">
                    <input class="form-control" type="text" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Password">
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-danger form-control">login</button>
                </div>
            </form>
            <form id="register" action="{{route('register')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-6 form-group">
                        <input class="form-control" type="text" name="firstname" placeholder="FirstName">
                    </div>
                    <div class="form-group col-6">
                        <input class="form-control" type="text" name="lastname" placeholder="LastName">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 form-group">
                        <input class="form-control" type="text" name="phone" placeholder="PhoneNumber">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 form-group">
                        <input class="form-control" type="date" name="birthday" placeholder="Birthday">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 form-group">
                        <input class="form-control" type="text" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 form-group">
                        <input class="form-control" type="text" name="address" placeholder="Address">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 form-group">
                        <input id="password" class="form-control" type="password" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 form-group">
                        <input class="form-control" type="text" name="Confirm_Password" placeholder="Confirm Password">
                    </div>
                </div>
                <div class="form-group text-center">
                    <button class="form-control btn btn-info">Register</button>
                </div>
            </form>
        </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js">
    </script>
    <script>
        var LoginForm = document.getElementById("login")
        var RegisterForm = document.getElementById('register')
        var Indicator = document.getElementById('indicator')

        function login() {
            LoginForm.style.transform = "translateX(0px)"
            RegisterForm.style.transform = "translateX(0px)"
            Indicator.style.transform = "translateX(0px)";
            LoginForm.style.opacity = "1";
            RegisterForm.style.opacity = "0";
        }

        function register() {
            LoginForm.style.transform = "translateX(417px)"
            RegisterForm.style.transform = "translateX(417px)"
            Indicator.style.transform = "translateX(97px)";
            LoginForm.style.opacity = "0";
            RegisterForm.style.opacity = "1";
        }
    </script>
    <script>
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
                    required : 'Vui lòng nhập password'
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
                    required: 'Họ tên không được bỏ trống',
                    minlength: 'Vui lòng nhập họ tên đầy đủ',
                },
                lastname: {
                    required: 'Tên không được bỏ trống',
                    minlength: 'Vui lòng nhập đúng tên',
                },
                phone: {
                    required: 'Phone không được bỏ trống',
                    minlength: 'Số điện thoại không đúng định dạng',
                    maxlength: 'Số điện thoại không đúng định dạng'
                },
                birthday: {
                    required: 'Birthday không được bỏ trống',
                },
                email: {
                    required: 'Email không được bỏ trống',
                    minlength: 'Email không ngắn hơn 10 ký tự',
                    email: 'Vui lòng nhập đúng định dạng @gmail.com'
                },
                address: {
                    required: 'Address không được bỏ trống',
                    minlength: 'Vui lòng nhập địa chỉ cụ thể',
                },
                password: {
                    required: 'Password không được bỏ trống',
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
