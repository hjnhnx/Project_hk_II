@extends('client.layouts.master')
@section('title','Trang cá nhân người dùng')
@section('main_content')
    <div class="container">
        <div class="col-12">
            <h1 class="text-center text-danger">Thông tin cá nhân</h1>
        </div>
        <div class="col-10 row" style="margin: 20px 20px">
            <div class="col-4" style="position: relative;width: 280px;height: 280px">
                <img style="object-fit: cover;width: 100%;height: 100%" src="https://thumbs.dreamstime.com/b/default-avatar-profile-icon-vector-social-media-user-portrait-176256935.jpg"><i style="font-size: 30px;position: absolute;bottom: 10px; right: 20px" class="fas fa-camera"></i>
            </div>
            <div class="col-8">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Họ và Tên</th>
                        <th scope="col">Lee Thành Đạt</th>
                    </tr>
                    <tr>
                        <th scope="col">Ngày Sinh</th>
                        <th scope="col">27/09/2002</th>
                    </tr>
                    <tr>
                        <th scope="col">Email</th>
                        <th scope="col">123@gmail.com</th>
                    </tr>
                    <tr>
                        <th scope="col">Số Điện Thoại</th>
                        <th scope="col">0388852709</th>
                    </tr>
                    <tr>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Hải Dương</th>
                    </tr>
                    </thead>
                </table>
                <button style="margin-left: 100px" class="btn btn-danger">Chỉnh sửa thông tin <i class="fas fa-cog"></i></button>
            </div>
        </div>
    </div>
@endsection
