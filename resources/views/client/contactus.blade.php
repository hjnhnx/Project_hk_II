@extends('client.layouts.master')
@section('title','Contactus')

@section('main_content')
    <section>
        <div class="container">
            <div class="containerinfo">
                <div>
                    <h2>Thông Tin Liên Hệ</h2>
                    <ul class="info">
                        <li>
                            <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                            <span><a
                                    href="https://www.google.com/maps/place/FPT+Aptech+H%C3%A0+N%E1%BB%99i/@21.0288119,105.7822824,15z/data=!4m5!3m4!1s0x0:0x26caee8e7662dd9b!8m2!3d21.0286424!4d105.7822534">Số 8A,Tôn Thất Thuyết,Mỹ Đình,Nam Từ Liêm,HàNội<br/></a></span>
                        </li>
                        <li>
                            <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                            <span><a href="">Sunmobile@gmail.com</a></span>
                        </li>
                        <li>
                            <span><i class="fa fa-phone-square" aria-hidden="true"></i></span>
                            <span><a href="">0888.888.888</a></span>
                        </li>
                    </ul>
                </div>
                <ul class="sci">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="containerForm">
                @if(session('message'))
                    <div class="alert alert-success" role="alert">
                        {{session('message')}}
                    </div>
                    @endif
                <h2>Gửi Lời Nhắn</h2>
                <form action="{{route('contactus_send')}}" id="form_contact" method="post">
                    @csrf
                    <div class="formBox">
                        <div class="inputBox w50">
                            <input type="text" name="name">
                            <span>Tên</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" name="email">
                            <span>Email</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" name="phone">
                            <span>Số điện thoại</span>
                        </div>
                        <div class="inputBox w100">
                            <textarea name="message"></textarea>
                            <span>Lời nhắn của bạn</span>
                        </div>
                        <div class="inputBox w100">
                            <input type="submit" value="Gửi">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
@section('custom_js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script>
        $('#form_contact').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 5,
                    maxlength: 20
                },
                email: {
                    required: true,
                    email: true,
                },
                phone: {
                    required: true,
                    minlength: 8,
                    maxlength: 11
                },
                meessage: {
                    required: true,
                }
            },
            messages: {
                name: {
                    required: 'Vui lòng không bỏ trống trường này.',
                    minlength: 'Tên không được nhỏ hơn 5 ký tự.',
                    maxlength: 'Tên không được vượt quá 20 ký tự.',
                },
                email: {
                    required: 'Vui lòng không bỏ trống trường này.',
                    minlength: 'Email không đúng định dạng.',
                },
                phone: {
                    required: 'Vui lòng không bỏ trống trường này.',
                    minlength: 'Số điện thoại không đúng định dạng.',
                    maxlength: 'Số điện thoại không đúng định dạng.'
                },
                meessage: {
                    required: 'Vui lòng nhập nội dung cần gửi.',
                },
            }
        })

        {{--$('#form_image').on('submit', function (event) {--}}
        {{--    event.preventDefault()--}}
        {{--    $.ajax({--}}
        {{--        url: "{{route('upload_image')}}",--}}
        {{--        method: "POST",--}}
        {{--        data: new FormData(this),--}}
        {{--        dataType: "JSON",--}}
        {{--        contentType: false,--}}
        {{--        cache: false,--}}
        {{--        processData: false,--}}
        {{--        success: function (res) {--}}
        {{--            var img = document.getElementById('show_avatar')--}}
        {{--            img.style.display = 'block'--}}
        {{--            document.getElementById('avatar').value = `${res.data.url}`--}}
        {{--            img.src = `${res.data.url}`--}}
        {{--        }--}}
        {{--    })--}}
        {{--})--}}
    </script>
@endsection


