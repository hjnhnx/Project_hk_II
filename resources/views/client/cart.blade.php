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
            margin: 30% auto;
        }

        .checked_option::before {
            content: '';
            display: block;
            border-radius: 50%;
            height: 100%;
            width: 100%;
            background-color: #01b201;
        }
        .checked_option2::before {
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
            <h2 class="text-secondary m-2">Giỏ hàng</h2>
            <div id="mobile_view_cart" style="width: 100%;" class="m-0 row p-0">
                @foreach($list as $index=>$item)
                    <div id="cart2_id_{{$item->id}}" style="height: 125px" class="col-12 col-sm-12 col-md-6 p-1">
                        <div style="height: 100%; width: 100%;position: relative" class="border row m-0 p-0">
                            <div onclick="document.getElementById('price_id_{{$item->id}}').click();is_checked(this)" style="z-index: 100;cursor: pointer;height: 23px;width: 23px;border-radius: 50%;position: absolute;bottom: 3px ; right: 3px;border: 1px #747474 solid" class="p-1 checked_option2"></div>
                            <div style="height: 80%;width: 90px" class="mt-2">
                                <img src="{{$item->thumbnail}}" alt="" style="height: 100%;width: 100%;object-fit: cover">
                            </div>
                            <div class="col">
                                <p class="m-0 p-0" style="font-size: 12px"><span class="d-inline-block" style="margin-top: 3px;height: 12px;width: 12px;background: {{$item->color}};transform: translateY(2px)"></span> {{$item->product_name}} ( {{$item->ram}}/{{$item->rom}}GB )</p>
                                <div class="row m-0 p-0">
                                    <div class="col-4 col-sm-4 col-md-4 m-0 p-1">
                                        <input min="1" onchange="change_price('cart_item_{{$index}}',this)" value="{{$item->quantity}}" type="number" class="form-control">
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4 m-0 p-1">
                                        <button onclick="document.getElementById(`btnupdate_cart{{$index}}`).click()" class="btn btn-primary form-control"><i class="fas fa-pen"></i></button>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4 m-0 p-1">
                                        <button onclick="document.getElementById('remove{{$item->id}}').click()" class="btn btn-danger form-control"><i class="far fa-trash-alt"></i></button>
                                    </div>
                                </div>
                                <p style="font-size: 12px" class="m-0">giá/1 sản phẩm: <span class="text-danger" style="font-weight: 600">{{number_format($item->price)}}</span> vnđ</p>
                                <p style="font-size: 12px" class="m-0">Thành tiền: <span class="text-danger" id="all_price2{{$item->id}}" style="font-weight: 600">{{number_format($item->price * $item->quantity)}}</span> vnđ</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <table class="table table-bordered desktopView">
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
                            <div nonce="{{$item->id}}" id="price_id_{{$item->id}}"
                                 slot="{{$item->price * $item->quantity}}" class="border btn_choice_option checked_option"></div>
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
                            <input id="cart_item_{{$index}}" type="number" name="cart_item_{{$index}}" class="form-control"
                                   value="{{$item->quantity}}">
                        </td>
                        <td>{{number_format($item->price)}} vnđ</td>
                        <td>
                            <button id="btnupdate_cart{{$index}}" onclick="update_cart(`cart_item_{{$index}}`,{{$item->id}})" class="btn btn-primary">
                                Cập nhật
                            </button>
                            <button onclick="remove_cart(`{{$item->id}}`)" id="remove{{$item->id}}" class="btn btn-danger">Xóa</button>
                        </td>
                        <td><span id="all_price{{$item->id}}">{{number_format($item->price * $item->quantity)}} </span>
                            vnđ
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class=" border col-12 row m-0 p-0" style="">
                <div class="col-12 col-xl-6 c0l-md-6 col-sm-12 d-flex align-items-center">
                    <button onclick="get_id()" data-toggle="modal" data-target="#exampleModal1" class="btn btn-primary m-auto btn_checkout" style="width: 150px;margin-top: 5px!important;margin-bottom: 5px!important;" disabled>Mua hàng
                    </button>
                </div>
                <div class="col-12 col-xl-6 c0l-md-6 col-sm-12 d-flex justify-content-center align-items-center">
                    <p class="text_mini" style="font-size: 18px;font-weight: bold">
                        Thanh toán : <span class="show_price_is_choice">{{number_format($total_price)}}</span> vnđ / Tổng số : <span
                            class="show_total_price"> {{number_format($total_price)}} </span> vnđ
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('custom_js')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var checked_count_item = document.querySelectorAll('.checked_option')
            if (checked_count_item.length !== 0){
                $('.btn_checkout').prop( "disabled", false )
            }else {
                $('.btn_checkout').prop( "disabled", true )
            }
            $('.btn_choice_option').click(function () {
                this.classList.toggle('checked_option')
                var checked_count_item = document.querySelectorAll('.checked_option')
                if (checked_count_item.length !== 0){
                    $('.btn_checkout').prop( "disabled", false )
                }else {
                    $('.btn_checkout').prop( "disabled", true )
                }
                show_choice_price()
            })
        })

        function show_choice_price() {
            var choice = document.querySelectorAll('.checked_option')
            var price = 0
            for (let i = 0; i < choice.length; i++) {
                price += Number(choice[i].slot)
            }
            $('.show_price_is_choice').text(number_format(price, 'vi-VN'))
        }
    </script>
@endsection
