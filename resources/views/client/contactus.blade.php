@extends('client.layouts.master')
@section('title','Contactus')
@section('custom_style')
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-61177547f7ce676c"></script>

    <link rel="stylesheet" type="text/css" href="/libs/client/contacts/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="/libs/client/contacts/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="/libs/client/contacts/select2/select2.min.css">


    <link rel="stylesheet" type="text/css" href="/libs/client/styles/css/util.css">
    <link rel="stylesheet" type="text/css" href="/libs/client/styles/css/main.css">
@endsection

@section('main_content')
    @if(session('message'))
        <div class="alert alert-success" role="alert">
            Thông tin gửi thành công!!!
        </div>
    @endif
    <section>
        <div class="container d-flex justify-content-center pt-5 mobile_container">
            <div class="contact1">
                <div class="container-contact1">
                    <div class="contact1-pic js-tilt" data-tilt>
                        <img src="/libs/client/images/img-01.png" alt="IMG">
                    </div>

                    <form action="{{route('contactus_send')}}" method="post" class="contact1-form validate-form">
                        @csrf
                        <span class="contact1-form-title" style="font-family: Sans-serif">Để lại liên hệ tại đây</span>

                        <div class="wrap-input1 validate-input" data-validate="Name is required">
                            <input class="input1" type="text" name="name" placeholder="Họ và tên">
                            <span class="shadow-input1"></span>
                        </div>

                        <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                            <input class="input1" type="text" name="email" placeholder="Email">
                            <span class="shadow-input1"></span>
                        </div>

                        <div class="wrap-input1 validate-input" data-validate="Subject is required">
                            <input class="input1" type="text" name="phone" placeholder="Số điện thoại">
                            <span class="shadow-input1"></span>
                        </div>

                        <div class="wrap-input1 validate-input" data-validate="Message is required">
                            <textarea class="input1" name="message" placeholder="Lời nhắn"></textarea>
                            <span class="shadow-input1"></span>
                        </div>

                        <div class="container-contact1-form-btn">
                            <button class="contact1-form-btn">
						<span>
							Send Email
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('custom_js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script>
        $('#contact').validate({
            rules: {
                name: {
                    required: true
                },
                phone: {
                    required: true,
                    minlength: 8,
                    maxlength: 12,
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true
                },
            },
            messages: {
                name: {
                    required: 'Vui lòng nhập tên'
                },
                phone: {
                    required: 'Nhập vào số điện thoại',
                    minlength: 'Sô điện thoại sai định dạng',
                    maxlength: 'Sô điện thoại sai định dạng',
                },
                email: {
                    required: 'Vui lòng nhập email',
                    email: 'Email sai định dạng'
                },
                message: {
                    required: 'Vui lòng để lại lời nhắn'
                },
            }
        })
    </script>
@endsection
