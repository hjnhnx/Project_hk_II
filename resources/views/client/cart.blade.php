@extends('client.layouts.master')
@section('title','Shopping cart')
@section('custom_style')
    <style>
        .content_cart {
            padding: 20px 0;
            min-height: 600px;
            max-width: 1450px !important;
        }

        .btn_choice_option {
            padding: 3px;
            height: 30px;
            width: 30px;
            cursor: pointer;
            border-radius: 50%;
            margin: 30%  auto;
        }

        .checked_option::before {
            content: '';
            display: block;
            border-radius: 50%;
            height: 100%;
            width: 100%;
            background-color: #01b201;
        }

    </style>
@endsection
@section('main_content')
    <section class="container content_cart">
        <div class="col-12 m-0 p-0">
            <h2>Giỏ hàng</h2>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Chọn</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Cấu hình</th>
                    <th scope="col" style="width: 120px">Số lượng</th>
                    <th scope="col">Giá / 1</th>
                    <th scope="col">Thao tác</th>
                    <th scope="col">Thành tiền</th>
                </tr>
                </thead>
                <tbody>
                @foreach($list as $index=>$item)
                    <tr id="cart_id_{{$item->id}}">
                        <td>
                            <div id="price_id_{{$item->id}}" slot="{{$item->price * $item->quantity}}" class="border btn_choice_option"></div>
                        </td>
                        <td>{{$item->product_name}}</td>
                        <td>
                            <img style="height: 70px" src="{{$item->thumbnail}}" alt="">
                        </td>
                        <td><span
                                style="height: 20px;width: 20px;background: {{$item->color}};display: inline-block;transform: translateY(5px)"></span> {{$item->ram}}
                            GB / {{$item->rom}}GB
                        </td>
                        <td>
                            <input type="number" name="cart_item_{{$index}}" class="form-control"
                                   value="{{$item->quantity}}">
                        </td>
                        <td>{{number_format($item->price)}} vnđ</td>
                        <td>
                            <button onclick="update_cart(`cart_item_{{$index}}`,{{$item->id}})" class="btn btn-primary">
                                Cập nhật
                            </button>
                            <button onclick="remove_cart(`{{$item->id}}`)" class="btn btn-danger">Xóa</button>
                        </td>
                        <td><span id="all_price{{$item->id}}">{{number_format($item->price * $item->quantity)}} </span>
                            vnđ
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class=" border col-12 row m-0 p-0" style="height: 80px">
                <div class="col-6 d-flex align-items-center">
                    <button class="btn btn-primary" style="width: 150px">Mua hàng</button>
                </div>
                <div class="col-6 d-flex justify-content-center align-items-center">
                    <p class="" style="font-size: 18px;font-weight: bold">
                        Thanh toán : <span class="show_price_is_choice">0</span> vnđ / Tổng số : <span class="show_total_price"> {{number_format($total_price)}} </span> vnđ
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('custom_js')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            $('.btn_choice_option').click(function () {
                this.classList.toggle('checked_option')
                show_choice_price()
            })
        })
        function show_choice_price(){
            var choice = document.querySelectorAll('.checked_option')
            var price = 0
            for (let i = 0; i < choice.length; i++) {
                price += Number(choice[i].slot)
            }
            $('.show_price_is_choice').text(number_format(price,'vi-VN'))
        }
    </script>
@endsection
