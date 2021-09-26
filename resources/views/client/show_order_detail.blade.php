
@extends('client.layouts.master')
@section('custom_style')
    <style>
        .container{
            padding-left: 50px;
        }
        h1{
            margin-top: 30px;
        }
    </style>
@endsection
@section('main_content')
    <h1 class="text-secondary m-12" style="margin-left: 30px" >Chi tiết đơn hàng</h1>
    <div class="container" style="margin-top: 30px">
        <div class="row d-flex justify-content-center">
            <div class="text-secondary col-xs-12 col-sm-12 col-md-4 col-lg-6">
                <h3><b>Địa chỉ nhận hàng:</b></h3>
                <div class="col-lg-12 p-0">
                    <p><strong>Mã người dùng:</strong> {{$order->user_id * 987654}}</p>
                    <p><strong>Họ và tên người dùng:</strong> {{$order->ship_name}}</p>
                    <p><strong>Số điện thoại:</strong> {{$order->ship_phone}}</p>
                    <p><strong>Email:</strong> {{$order->ship_email}}</p>
                    <p><strong>Địa chỉ:</strong> {{$order->ship_address}}</p>
                </div>
            </div>
            <div class="text-secondary col-xs-12 col-sm-12 col-md-6 col-lg-6" style="padding-left: 10px">
                <h3><b>Thông tin vận chuyển:</b></h3>
                <div class="col-md-12 p-0">
                    <p><strong>Phương thức vận chuyển:</strong> COD</p>
                    <p><strong>Đơn vị vận chuyển:</strong> GRAB</p>
                    <p><strong>Trạng thái đơn hàng:</strong> @if($order->status == \App\Enums\OrderStatus::Create)
                            Chờ lấy hàng
                        @elseif($order->status == \App\Enums\OrderStatus::Delivery)
                            Đang giao hàng
                        @elseif($order->status == \App\Enums\OrderStatus::Complete)
                            Đã nhận hàng
                        @elseif($order->status == \App\Enums\OrderStatus::Cancel)
                            Đã hủy đơn hàng
                        @endif</p>
                    <p><strong>Trạng thái thanh toán:</strong>{{$order->is_checkout == \App\Enums\CheckoutStatus::UNPAID ? 'Chưa thanh toán' : 'Đã thanh toán'}}</p>
                </div>
            </div>
        </div>
        <br>
        <div class="row d-flex justify-content-center" style="display: flex">
            <div class="text-secondary col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3><b>Thông tin đặt hàng:</b></h3>
                <div class="col-lg-12 p-0">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Màu</th>
                            <th>Ảnh</th>
                            <th>Cấu hình</th>
                            <th>Giá/sản phẩm (vnđ)</th>
                            <th>Số lượng</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order_details as $order_detail)
                            <tr>
                                <td>{{\App\Models\Product::find($order_detail->product_option->product_id)->name}}</td>
                                <td>{{\App\Models\Color::find($order_detail->product_option->color_id)->name}}</td>
                                <td><img src="{{$order_detail->product_option->thumbnail}}" alt="" width="120px"></td>
                                <td>{{$order_detail->product_option->ram}}GB/RAM
                                    - {{$order_detail->product_option->rom}}GB/ROM
                                </td>
                                <td>{{number_format($order_detail->unit_price)}} vnđ</td>
                                <td>{{$order_detail->quantity}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <br>
            </div>
            <div class="text-secondary  col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="col-lg-12 p-0 ">
                    <p><strong>Tổng tiền hàng: </strong>{{number_format($order->total_price)}} vnđ</p>
                    <p><strong>Mã đơn hàng: </strong>#{{$order->order_code}}</p>
                    <p><strong>Ngày tạo: </strong>{{$order_detail->created_at}}</p>
                    <p><strong>Thanh toán: </strong>{{$order->is_checkout == \App\Enums\CheckoutStatus::UNPAID ? 'Chưa thanh toán' : 'Đã thanh toán'}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
