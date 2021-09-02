@section('title','Form user | Admin')
@extends('.admin.layouts.form')
@section('title_form','Create user')

@section('size_form')
    <div class="col-md-12">
        @endsection

        @section('input_form')
            <div class="row form-group">
                <div class="col-lg-4">
                    <label for="">FirstName</label>
                    <input type="text" name="firstname" placeholder="First Name" class="form-control">
                    @error('firstname')
                    <span style="color: #f97d7d;font-size: 12px;font-weight: bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-md hidden-lg hidden-xl"></div>

                <div class="col-lg-4">
                    <label for="">LastName</label>
                    <input type="text" name="lastname" placeholder="Last Name" class="form-control">
                    @error('lastname')
                    <span style="color: #f97d7d;font-size: 12px;font-weight: bold">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-md hidden-lg hidden-xl"></div>

                <div class="col-lg-4">
                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="Your Email" class="form-control">
                    @error('email')
                    <span style="color: #f97d7d;font-size: 12px;font-weight: bold">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row form-group">
                <div class="col-lg-12">
                    <label for="">Avatar</label>
                    <input type="text" name="avatar" placeholder="Enter url avatar" class="form-control">
                    @error('avatar')
                    <span style="color: #f97d7d;font-size: 12px;font-weight: bold">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row form-group">
                <div class="col-lg-3">
                    <label for="">Birthday</label>
                    <input type="date" name="birthday" placeholder="Enter your birthday" class="form-control">
                    @error('birthday')
                    <span style="color: #f97d7d;font-size: 12px;font-weight: bold">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-lg-3">
                    <label for="">Phone</label>
                    <input type="text" name="phone" placeholder="Enter your phone number" class="form-control">
                    @error('phone')
                    <span style="color: #f97d7d;font-size: 12px;font-weight: bold">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-lg-6">
                    <label for="">Address</label>
                    <input type="text" name="address" placeholder="Enter your address" class="form-control">
                    @error('address')
                    <span style="color: #f97d7d;font-size: 12px;font-weight: bold">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row form-group">
                <div class="col-lg-5">
                    <label for="">Password</label>
                    <input id="password" type="password" name="password" placeholder="Enter your password" class="form-control">
                    @error('password')
                    <span style="color: #f97d7d;font-size: 12px;font-weight: bold">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="row form-group">
                <div class="col-lg-5">
                    <label for="">Confirm Password</label>
                    <input type="password" name="confirm_password" placeholder="Confirm password" class="form-control">
                    @error('password')
                    <span style="color: #f97d7d;font-size: 12px;font-weight: bold">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        @endsection
{{--         @section('Extra_js')--}}
{{--            <script>--}}
{{--                $('#form_admin').validate({--}}
{{--                        rules: {--}}
{{--                            firstname: {--}}
{{--                                required: true,--}}
{{--                                minlength: 2,--}}
{{--                            },--}}
{{--                            lastname: {--}}
{{--                                required: true,--}}
{{--                                minlength: 2,--}}
{{--                            },--}}
{{--                            email: {--}}
{{--                                required: true,--}}
{{--                                minlength: 10,--}}
{{--                                email: true--}}
{{--                            },--}}
{{--                            avatar: {--}}
{{--                                required: true,--}}
{{--                            },--}}
{{--                            birthday: {--}}
{{--                                required: true,--}}
{{--                            },--}}
{{--                            phone: {--}}
{{--                                required: true,--}}
{{--                                minlength: 9,--}}
{{--                                maxlength: 12--}}
{{--                            },--}}
{{--                            address: {--}}
{{--                                required: true,--}}
{{--                                minlength: 20,--}}
{{--                            },--}}
{{--                            password: {--}}
{{--                                required: true,--}}
{{--                                minlength: 6,--}}
{{--                            },--}}
{{--                            confirm_password:{--}}
{{--                                required: true,--}}
{{--                                equalTo: "#password"--}}
{{--                            }--}}

{{--                    },--}}
{{--                    messages:{--}}
{{--                        firstname: {--}}
{{--                            required: 'Họ tên không được bỏ trống',--}}
{{--                            minlength: 'Vui lòng nhập họ tên đầy đủ',--}}
{{--                        },--}}
{{--                        lastname: {--}}
{{--                            required: 'Tên không được bỏ trống',--}}
{{--                            minlength: 'Vui lòng nhập đúng tên',--}}
{{--                        },--}}
{{--                        email: {--}}
{{--                            required: 'Email không được bỏ trống',--}}
{{--                            minlength: 'Email không ngắn hơn 10 ký tự',--}}
{{--                            email: 'Vui lòng nhập đúng định dạng @gmail.com'--}}
{{--                        },--}}
{{--                        avatar: {--}}
{{--                            required: 'Avatar không được bỏ trống',--}}
{{--                        },--}}
{{--                        birthday: {--}}
{{--                            required: 'Birthday không được bỏ trống',--}}
{{--                        },--}}
{{--                        phone: {--}}
{{--                            required: 'Phone không được bỏ trống',--}}
{{--                            minlength: 'Số điện thoại không đúng định dạng',--}}
{{--                            maxlength: 'Số điện thoại không đúng định dạng'--}}
{{--                        },--}}
{{--                        address: {--}}
{{--                            required: 'Address không được bỏ trống',--}}
{{--                            minlength: 'Vui lòng nhập địa chỉ cụ thể',--}}
{{--                        },--}}
{{--                        password: {--}}
{{--                            required: 'Password không được bỏ trống',--}}
{{--                            minlength: 'Mật khẩu cần ít nhất 6 kí tự',--}}
{{--                        },--}}
{{--                        confirm_password:{--}}
{{--                            required: 'Vui lòng nhập lại mật khẩu',--}}
{{--                            equalTo: 'Mật khẩu không khớp'--}}
{{--                        }--}}
{{--                    }--}}
{{--                })--}}
{{--            </script>--}}
{{--@endsection--}}


