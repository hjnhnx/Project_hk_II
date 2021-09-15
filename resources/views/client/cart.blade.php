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

    </style>
@endsection
@section('main_content')
    <section class="container content_cart">
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="margin: 0;height:50px">
                        <button type="button" class="close close_video" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('create_order')}}" method="post" class="col-12">
                            @csrf
                            <input type="hidden" name="total_price" class="form-control">
                            <input value="" type="hidden" name="all_id" class="form-control all_id">

                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="">Họ và tên</label>
                                    <input
                                        value="{{\Illuminate\Support\Facades\Auth::check() ? \Illuminate\Support\Facades\Auth::user()->firstname . ' ' . \Illuminate\Support\Facades\Auth::user()->lastname : ''}}"
                                        type="text" name="ship_name" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="">Số điện thoại</label>
                                    <input
                                        value="{{\Illuminate\Support\Facades\Auth::check() ? \Illuminate\Support\Facades\Auth::user()->phone : ''}}"
                                        type="text" name="ship_phone" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="">Email</label>
                                    <input
                                        value="{{\Illuminate\Support\Facades\Auth::check() ? \Illuminate\Support\Facades\Auth::user()->email : ''}}"
                                        type="text" name="ship_email" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="">Địa chỉ</label>
                                    <input
                                        value="{{\Illuminate\Support\Facades\Auth::check() ? \Illuminate\Support\Facades\Auth::user()->address : ''}}"
                                        type="text" name="ship_address" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="">Ghi chú</label>
                                    <textarea placeholder="Có thể để để rỗng" name="note" id="" cols="30" rows="3"
                                              class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <button class="btn btn-primary form-control">Đặt hàng</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
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
                            <div nonce="{{$item->id}}" id="price_id_{{$item->id}}"
                                 slot="{{$item->price * $item->quantity}}" class="border btn_choice_option"></div>
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
                    <button onclick="get_id()" data-toggle="modal" data-target="#exampleModal1" class="btn btn-primary"
                            style="width: 150px">Mua hàng
                    </button>
                </div>
                <div class="col-6 d-flex justify-content-center align-items-center">
                    <p class="" style="font-size: 18px;font-weight: bold">
                        Thanh toán : <span class="show_price_is_choice">0</span> vnđ / Tổng số : <span
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
            $('.btn_choice_option').click(function () {
                this.classList.toggle('checked_option')
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
