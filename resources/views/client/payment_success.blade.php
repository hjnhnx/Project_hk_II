@extends('client.layouts.master')
@section('title','Thanh toán thành công')
@section('custom_style')
    <style>

    </style>
@endsection
@section('main_content')
    <div class="container-fluid">
        <section class="container content_cart p-0">
            <div style="margin: 35px auto;height: 400px;width: 100%">
                <div class="col-12 d-flex justify-content-center">
                    <img style="height: 120px;width: 120px" src="data:image/png;base64,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" alt="">
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <h2 class="text-success">Thanh toán thành công</h2>
                </div>
                <div class="col-12 text-center">
                    <p style="font-size: 18px" class="text-primary">Cảm ơn quý khách hàng đã tin tưởng lựa chọn và sử dụng dịch vụ của chúng tôi
                        <br> thông tin chi tiết về đơn hàng đã được gửi về gmail của quý khách</p>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <a href="{{route('home_page')}}"><button class="btn btn-primary">Tiếp tục mua sắm</button></a>
                </div>
            </div>
        </section>
    </div>
@endsection