@extends('client.layouts.master')
@section('title','Contactus')
@section('custom_style')
    <link rel="stylesheet" href="/libs/client/styles/style.css">
    <style>
        .error {
            color: #f74c4c;
        }
    </style>
@endsection

@section('main_content')
    <section>
        <div class="container d-flex justify-content-center p-5">
            <div class="col-11 border row p-0 m-0">
                <div class="col-4 pt-4 pb-4 border pl-3">
                    <h2 class="text-danger">Sun mobile</h2>
                    <br>
                    <p>Địa chỉ <br> <a href="https://www.google.com/maps/place/FPT+Aptech+H%C3%A0+N%E1%BB%99i/@21.0291324,105.7820464,16z/data=!4m5!3m4!1s0x0:0x26caee8e7662dd9b!8m2!3d21.0286424!4d105.7822534?hl=en-GB">Số 8A,Tôn Thất Thuyết,Mỹ Đình,Nam Từ Liêm,Hà Nội</a></p>
                    <p>Số điện thoại <br> <a href="tel:0888.888.888">0888.888.888</a></p>
                    <p>Email <br> <a href="mailto:sunmobile@gmail.com">sunmobile@gmail.com</a></p>
                    <p>Fanpage <br> <a href="">https://www.facebook.com/MixiGaming</a></p>
                </div>
                <div class="col-8 pt-4 pb-4">
                    <h2 class="text-danger">Để lại liên hệ</h2>
                    <form action="" class="col-12" method="post" id="contact">
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="">Họ và tên</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group col-6">
                                <label for="">Số điện thoại</label>
                                <input type="text" class="form-control" name="phone">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="">Lời nhắn</label>
                                <textarea class="form-control" name="message" id="" cols="30" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <button class="btn btn-primary form-control">Gửi</button>
                            </div>
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
            rules:{
                name:{
                    required:true
                },
                phone:{
                    required:true,
                    minlength:8,
                    maxlength:12,
                },
                email:{
                    required:true,
                    email:true
                },
                message:{
                    required:true
                },
            },
            messages:{
                name:{
                    required:'Vui lòng nhập tên'
                },
                phone:{
                    required:'Nhập vào số điện thoại',
                    minlength:'Sô điện thoại sai định dạng',
                    maxlength:'Sô điện thoại sai định dạng',
                },
                email:{
                    required:'Vui lòng nhập email',
                    email:'Email sai định dạng'
                },
                message:{
                    required:'Vui lòng để lại lời nhắn'
                },
            }
        })
    </script>
@endsection


