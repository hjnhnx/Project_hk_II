@extends('client.layouts.master')
@section('title','Trang Chủ')
@section('custom_style')
    <style>

    </style>
@endsection
@section('main_content')
    <div class="container-fluid">
        <section class="container content_cart p-0">
            @if(\Illuminate\Support\Facades\Auth::check())
                <div class="col-12 m-0 row" style="padding: 10px 0">
                    @foreach($list as $item)
                        <div style="min-height: 300px" class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 row m-0 p-2">
                            <div style="min-height: 300px;width: 100%" class="border border-primary p-2">
                                <p class="m-0" style="font-weight: 600">Mã đơn hàng : <span
                                        class="text-danger">#{{$item->order_code}}</span></p>
                                <p class="m-0" style="font-weight: 600">Ngày tạo đơn hàng : <span
                                    >{{date_format($item->created_at,'d/m/Y')}}</span></p>
                                <p class="m-0" style="font-weight: 600">Địa chỉ : <span
                                    >{{$item->ship_address}}</span></p>
                                <p class="m-0" style="font-weight: 600">Tổng giá trị đơn hàng : <span class="text-danger">{{number_format($item->total_price)}} vnđ</span>
                                </p>
                                <p class="m-0" style="font-weight: 600">Thanh toán : <span
                                        class="text-danger">{{$item->is_checkout == \App\Enums\CheckoutStatus::UNPAID ? 'Chưa thanh toán' : 'Đã thanh toán'}}</span>
                                </p>
                                <p class="m-0" style="font-weight: 600">Trạng thái đơn hàng : <span class="text-danger">
                                    @if($item->status == \App\Enums\OrderStatus::Create)
                                            Đã nhận đơn hàng
                                        @elseif($item->status == \App\Enums\OrderStatus::Delivery)
                                            Đang giao hàng
                                        @elseif($item->status == \App\Enums\OrderStatus::Complete)
                                            Đã giao hàng
                                        @elseif($item->status == \App\Enums\OrderStatus::Cancel)
                                            Đã hủy đơn hàng
                                        @endif
                            </span></p>
                                <hr>
                                @foreach($item->order_detail as $itemm)
                                    <div style="min-height: 95px;width: 100%;margin: 3px 0" class="border row p-0">
                                        <div style="height: 90%;width: 80px;padding: 5px">
                                            <img style="height: 100%;width: 100%;object-fit: cover"
                                                 src="{{\App\Models\Product_option::find($itemm->product_option_id)->thumbnail}}"
                                                 alt="">
                                        </div>
                                        <div class="col">
                                            <p class="m-0" style="font-weight: 600;font-size: 14px"><span
                                                    style="display: inline-block;transform: translateY(2px);background: {{\App\Models\Color::find(\App\Models\Product_option::find($itemm->product_option_id)->color_id)->color_code}};height: 13px;width: 13px"></span>
                                                {{\App\Models\Product::find(\App\Models\Product_option::find($itemm->product_option_id)->product_id)->name}} ({{\App\Models\Product_option::find($itemm->product_option_id)->ram}}/ {{\App\Models\Product_option::find($itemm->product_option_id)->rom}}GB)</p>
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
                    @endforeach
                </div>
            @elseif($list)
                <div class="col-12 m-0 row" style="padding: 10px 0">
                    @foreach($list as $item)
                        <div style="min-height: 300px" class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 row m-0 p-2">
                            <div style="min-height: 300px;width: 100%" class="border border-primary p-2">
                                <p class="m-0" style="font-weight: 600">Mã đơn hàng : <span
                                        class="text-danger">#{{$item->order_code}}</span></p>
                                <p class="m-0" style="font-weight: 600">Ngày tạo đơn hàng : <span
                                    >{{date_format($item->created_at,'d/m/Y')}}</span></p>
                                <p class="m-0" style="font-weight: 600">Địa chỉ : <span
                                    >{{$item->ship_address}}</span></p>
                                <p class="m-0" style="font-weight: 600">Tổng giá trị đơn hàng : <span class="text-danger">{{number_format($item->total_price)}} vnđ</span>
                                </p>
                                <p class="m-0" style="font-weight: 600">Thanh toán : <span
                                        class="text-danger">{{$item->is_checkout == \App\Enums\CheckoutStatus::UNPAID ? 'Chưa thanh toán' : 'Đã thanh toán'}}</span>
                                </p>
                                <p class="m-0" style="font-weight: 600">Trạng thái đơn hàng : <span class="text-danger">
                                    @if($item->status == \App\Enums\OrderStatus::Create)
                                            Đã nhận đơn hàng
                                        @elseif($item->status == \App\Enums\OrderStatus::Delivery)
                                            Đang giao hàng
                                        @elseif($item->status == \App\Enums\OrderStatus::Complete)
                                            Đã giao hàng
                                        @elseif($item->status == \App\Enums\OrderStatus::Cancel)
                                            Đã hủy đơn hàng
                                        @endif
                            </span></p>
                                <hr>
                                @foreach($item->order_detail as $itemm)
                                    <div style="min-height: 95px;width: 100%;margin: 3px 0" class="border row p-0">
                                        <div style="height: 90%;width: 80px;padding: 5px">
                                            <img style="height: 100%;width: 100%;object-fit: cover"
                                                 src="{{\App\Models\Product_option::find($itemm->product_option_id)->thumbnail}}"
                                                 alt="">
                                        </div>
                                        <div class="col">
                                            <p class="m-0" style="font-weight: 600;font-size: 14px"><span
                                                    style="display: inline-block;transform: translateY(2px);background: {{\App\Models\Color::find(\App\Models\Product_option::find($itemm->product_option_id)->color_id)->color_code}};height: 13px;width: 13px"></span>{{\App\Models\Product::find(\App\Models\Product_option::find($itemm->product_option_id)->product_id)->name}} ({{\App\Models\Product_option::find($itemm->product_option_id)->ram}}/ {{\App\Models\Product_option::find($itemm->product_option_id)->rom}}GB)</p>
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
                    @endforeach
                </div>
            @else
                <p style="font-size: 18px ; margin-top: 30px" class="text-center text-danger">Chức năng này bắt buộc phải <a href="{{route('login_register')}}">đăng nhập</a> hệ thống, hoặc điền thông tin trên đơn hàng của bạn tại form này</p>
                <div class="col-12 col-md-6 border pt-5" style="height: 300px;margin: 20px auto">
                    <form action="">
                        <div class="row">
                            <div class="form-group col-12">
                                <input name="ship_email" type="text" class="form-control" placeholder="Vui lòng nhập email bạn đã sủ dụng khi bạn tạo đơn hàng">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <input type="text" name="ship_phone" class="form-control" placeholder="Vui lòng nhập số điện thoại bạn đã sủ dụng khi bạn tạo đơn hàng">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <button class="btn btn-danger form-control">Lấy thông tin đơn hàng</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <p>Thắc mắc xin liên hệ : <a href="tel:0987987789">0987987789</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            @endif
        </section>
    </div>
@endsection
