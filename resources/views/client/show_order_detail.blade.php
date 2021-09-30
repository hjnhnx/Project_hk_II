@section('title','Đơn hàng # '.$order->order_code)
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
    <div class="container">
        <h1 class="text-secondary m-12 title_show_order" style="font-size: 35px">Chi tiết đơn hàng : #{{$order->order_code}}</h1>
    </div>
    <div class="container mobile_mode" style="display: none">
        <div style="min-height: 300px" class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 row m-0 p-2">
            <div style="min-height: 300px;width: 100%" class="border border-secondary p-2">
                <p class="m-0" style="font-weight: 600">Mã đơn hàng : <span
                        class="text-danger">#{{$order->order_code}}</span></p>
                <p class="m-0" style="font-weight: 600">Ngày tạo đơn hàng : <span
                    >{{date_format($order->created_at,'d/m/Y')}}</span></p>
                <p class="m-0" style="font-weight: 600">Địa chỉ : <span
                    >{{$order->ship_address}}</span></p>
                <p class="m-0" style="font-weight: 600">Tổng giá trị đơn hàng : <span class="text-danger">{{number_format($order->total_price)}} vnđ</span>
                </p>
                <p class="m-0" style="font-weight: 600">Thanh toán : <span
                        class="text-danger">{{$order->is_checkout == \App\Enums\CheckoutStatus::UNPAID ? 'Chưa thanh toán' : 'Đã thanh toán'}}</span>
                </p>
                <p class="m-0" style="font-weight: 600">Trạng thái đơn hàng : <span class="text-danger">
                                    @if($order->status == \App\Enums\OrderStatus::Create)
                            Chờ lấy hàng
                        @elseif($order->status == \App\Enums\OrderStatus::Delivery)
                            Đang giao hàng
                        @elseif($order->status == \App\Enums\OrderStatus::Complete)
                            Đã giao hàng
                        @elseif($order->status == \App\Enums\OrderStatus::Cancel)
                            Đã hủy đơn hàng
                        @endif
                            </span></p>
                <hr>
                @foreach($order_details as $itemm)
                    <div style="min-height: 95px;width: 100%;margin: 3px 0" class="border row p-0">
                        <div style="height: 90%;width: 80px;padding: 5px">
                            <img style="height: 100%;width: 100%;object-fit: cover"
                                 src="{{\App\Models\Product_option::find($itemm->product_option_id)->thumbnail}}"
                                 alt="">
                        </div>
                        <div class="col">
                            <a href="{{route('product_detail',\App\Models\Product::find(\App\Models\Product_option::find($itemm->product_option_id)->product_id)->slug)}}"><p class="m-0" style="font-weight: 600;font-size: 14px"><span
                                        style="display: inline-block;transform: translateY(2px);background: {{\App\Models\Color::find(\App\Models\Product_option::find($itemm->product_option_id)->color_id)->color_code}};height: 13px;width: 13px"></span>
                                    {{\App\Models\Product::find(\App\Models\Product_option::find($itemm->product_option_id)->product_id)->name}} ({{\App\Models\Product_option::find($itemm->product_option_id)->ram}}/ {{\App\Models\Product_option::find($itemm->product_option_id)->rom}}GB)</p></a>
                            <p class="m-0" style="font-weight: 500;font-size: 14px">Số lượng : {{$itemm->quantity}}</p>
                            <p class="m-0" style="font-weight: 500;font-size: 14px">Giá / 1 chiếc : <span
                                    class="text-danger">{{number_format($itemm->unit_price)}} vnđ</span></p>
                            <p class="m-0" style="font-weight: 500;font-size: 14px">Thành tiền : <span
                                    class="text-danger">{{number_format($itemm->unit_price * $itemm->quantity)}} vnđ</span></p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="container pc_mode" style="margin-top: 30px">
        <div class="row d-flex justify-content-center">
            <div class="text-secondary col-xs-12 col-sm-12 col-md-4 col-lg-6">
                <h3><b>Địa chỉ nhận hàng:</b></h3>
                <div class="col-lg-12 p-0">
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
                    <p><strong>Trạng thái đơn hàng:</strong> <span class="text-danger" style="font-weight: 600">
                            @if($order->status == \App\Enums\OrderStatus::Create)
                                Chờ lấy hàng
                            @elseif($order->status == \App\Enums\OrderStatus::Delivery)
                                Đang giao hàng
                            @elseif($order->status == \App\Enums\OrderStatus::Complete)
                                Đã nhận hàng
                            @elseif($order->status == \App\Enums\OrderStatus::Cancel)
                                Đã hủy đơn hàng
                            @endif
                        </span></p>
                    <p><strong >Trạng thái thanh toán:</strong><span class="text-danger" style="font-weight: 600">{{$order->is_checkout == \App\Enums\CheckoutStatus::UNPAID ? 'Chưa thanh toán' : 'Đã thanh toán'}}</span></p>
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
                                <td><a href="{{route('product_detail',\App\Models\Product::find($order_detail->product_option->product_id)->slug)}}">{{\App\Models\Product::find($order_detail->product_option->product_id)->name}}</a></td>
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
