@extends('client.layouts.master')
@section('title','Trang cá nhân người dùng')
@section('custom_style')
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-61177547f7ce676c"></script>
@endsection

@section('main_content')
    <div class="container">
        <div class="col-12 mt-5">
            <h2 class="text-center text-danger">Thông tin cá nhân</h2>
        </div>
        <div class="col-md-12 col-xl-10 row show_profile_desktop" style="margin: 40px auto">
            <div class="col-4" style="position: relative;width: 280px;height: 280px">
                <img style="object-fit: cover;width: 100%;height: 100%" src="{{\Illuminate\Support\Facades\Auth::user()->avatar}}">
            </div>
            <div class="col-8">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Họ và Tên</th>
                        <th scope="col">{{\Illuminate\Support\Facades\Auth::user()->firstname .' '.\Illuminate\Support\Facades\Auth::user()->lastname}}</th>
                    </tr>
                    <tr>
                        <th scope="col">Ngày Sinh</th>
                        <th scope="col">{{\Illuminate\Support\Facades\Auth::user()->birthday}}</th>
                    </tr>
                    <tr>
                        <th scope="col">Email</th>
                        <th scope="col">{{\Illuminate\Support\Facades\Auth::user()->email}}</th>
                    </tr>
                    <tr>
                        <th scope="col">Số Điện Thoại</th>
                        <th scope="col">{{\Illuminate\Support\Facades\Auth::user()->phone}}</th>
                    </tr>
                    <tr>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">{{\Illuminate\Support\Facades\Auth::user()->address}}</th>
                    </tr>
                    </thead>
                </table>
                <a href="{{route('edit_profile')}}"><button style="" class="btn btn-danger">Chỉnh sửa thông tin <i class="fas fa-cog"></i></button></a>
                <a href="{{route('user_logout')}}"><button style="" class="btn btn-danger">Đăng xuất <i class="fas fa-sign-out-alt"></i></button></a>
            </div>
        </div>
        <div style="width: 100%;padding: 10px;display: none" class="show_profile_mobile">
            <div style="width: 100%;height: 550px;border: #fc7373 3px solid">
                <div style="height: 27%;border-bottom: #fc7373 3px solid;background-image: linear-gradient(to bottom right, #6663fb, #f972e5)"></div>
                <div style="margin: auto;height: 135px;width: 135px;border: #fc7373 3px solid;transform: translateY(-50%);border-radius: 50%;overflow: hidden">
                    <img src="{{\Illuminate\Support\Facades\Auth::user()->avatar}}" alt="" style="height: 100%;width: 100%;object-fit: cover">
                </div>
                <div style="transform: translateY(-65px);padding: 10px">
                    <h4 class="text-center">{{\Illuminate\Support\Facades\Auth::user()->firstname .' '.\Illuminate\Support\Facades\Auth::user()->lastname}}</h4>
                    <p class="text-center" style="font-weight: 600">Ngày sinh : {{\Illuminate\Support\Facades\Auth::user()->birthday}}</p>
                    <p class="text-center" style="font-weight: 600">Email : {{\Illuminate\Support\Facades\Auth::user()->email}}</p>
                    <p class="text-center" style="font-weight: 600">Số điện thoại : {{\Illuminate\Support\Facades\Auth::user()->phone}}</p>
                    <p class="text-center" style="font-weight: 600">Địa chỉ : {{\Illuminate\Support\Facades\Auth::user()->address}}</p>
                </div>
                <div style="transform: translateY(-65px);padding: 10px;text-align: center">
                    <a href="{{route('edit_profile')}}"><button style="margin: 5px" class="btn btn-danger">Chỉnh sửa thông tin <i class="fas fa-cog"></i></button></a>
                    <a href="{{route('user_logout')}}"><button  style="margin: 5px" class="btn btn-danger">Đăng xuất <i class="fas fa-sign-out-alt"></i></button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
