@extends('client.layouts.master')
@section('title','Trang Chủ')
@section('custom_style')
    <style>
.search {
    display: block;
    text-align: left;
    width: 100%;
    margin-left: 1000px;
    margin-top: 20px;
    padding: 14px;
}
.button {
    margin-top: 20px;
}
.search:hover {
    background: #f1ecec;
}
.btn {
    margin: 5px 2px;
}
.bang {
    width: 100px;
}
    </style>
@endsection
@section('main_content')
   <div class="container">
       <h2>Đơn hàng của tôi</h2>
   </div>
   <div id="cat-nav">
       <div class="container cat-menu">
           <div class="item mobile dropdown has-child">
               <a>Tất cả Đơn hàng</a>
           </div>
           <div class="item mobile dropdown has-child">
                <a>Đang xử lí</a>
           </div>
           <div class="item mobile dropdown has-child">
               <a>Đã vận chuyển</a>
           </div>
           <div class="item mobile dropdown has-child">
               <a>Đã nhận</a>
           </div>
           <div class="item mobile dropdown has-child">
               <a>Đã hủy</a>
           </div>
       </div>
   </div>
<div class="container-fluid">
    <section class="container content_cart">
        <div class="col-12 m-0 p-0">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Tên</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Cấu hình</th>
                    <th scope="col" style="width: 120px">Số lượng</th>
                    <th scope="col">Giá</th>
                </tr>
                </thead>
            </table>
            <div class="btn" aria-label="Basic example">
                <button id="button1" type="button" class="btn btn-primary">Mua lại</button>
                <button id="button1" type="button" class="btn btn-primary">liên hệ</button>
            </div>
        </div>
    </section>
</div>
@endsection
