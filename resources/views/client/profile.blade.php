@extends('client.layouts.master')
@section('title','Trang cá nhân người dùng')
@section('main_content')
    <div class="container">
        <div class="col-12">
            <h1 class="text-center text-danger">Thông tin cá nhân</h1>
        </div>
        <div class="col-10 row" style="margin: 20px 20px">
            <div class="col-4" style="position: relative;width: 280px;height: 280px">
                <img style="object-fit: cover;width: 100%;height: 100%" src="{{\Illuminate\Support\Facades\Auth::user()->avatar}}"><i style="font-size: 30px;position: absolute;bottom: 10px; right: 20px" class="fas fa-camera"></i>
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
    </div>
@endsection
