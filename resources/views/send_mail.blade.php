<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table , th ,td {
            border: #d2d2d2 1px solid;
        }
        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>


<div class="container">
    <div style="width: 50%;border: #b5b5b5 1px solid;margin: auto">
        <h1 style="margin-left: 20px">Bạn đã đặt hàng thành công !</h1>
        <h2 style="margin-left: 20px">Thông tin đơn hàng #{{$order->order_code}}.</h2>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="box-sizing: border-box;width: 50%;padding :20px;float: left">
            <h3><b>Địa chỉ nhận hàng:</b></h3>
            <div class="col-lg-6 p-0">
                <p><strong>Họ và tên người dùng:</strong> {{$order->ship_name}}</p>
                <p><strong>Số điện thoại:</strong> {{$order->ship_phone}}</p>
                <p><strong>Email:</strong> {{$order->ship_email}}</p>
                <p><strong>Địa chỉ:</strong> {{$order->ship_address}}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="box-sizing: border-box;width: 50%;padding :20px;float: left">
            <h3><b>Thông tin vận chuyển</b></h3>
            <div class="col-lg-6 p-0">
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
                <p><strong>Trạng thái thanh
                        toán:</strong>{{$order->is_checkout == \App\Enums\CheckoutStatus::UNPAID ? 'Chưa thanh toán' : 'Đã thanh toán'}}
                </p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="clear: left;margin: auto">
            <h3 style="margin-left:20px"><b>Chi tiết đơn hàng</b></h3>
            <div class="col-lg-12 p-0" style="margin: auto">
                <table cellspacing="0" cellpadding="10" width="90%" style="margin: auto">
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
                            <td><a href="http://127.0.0.1:8000/product/{{\App\Models\Product::find($order_detail->product_option->product_id)->slug}}">{{\App\Models\Product::find($order_detail->product_option->product_id)->name}}</a></td>
                            <td>{{\App\Models\Color::find($order_detail->product_option->color_id)->name}}</td>
                            <td><img src="{{$order_detail->product_option->thumbnail}}" alt="" width="70px" height="70px" style="object-fit: cover"></td>
                            <td>{{$order_detail->product_option->ram}}GB/RAM
                                - {{$order_detail->product_option->rom}}GB/ROM
                            </td>
                            <td>{{number_format($order_detail->unit_price)}} vnđ</td>
                            <td>{{$order_detail->quantity}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="col-lg-5 " style="margin-left:20px ">
                    <p><strong>Tổng tiền hàng: </strong>{{number_format($order->total_price)}} vnđ</p>
                    <p><strong>Mã đơn hàng: </strong>#{{$order->order_code}}</p>
                    <p><strong>Ngày tạo: </strong>{{$order_detail->created_at}}</p>
                    <a href="http://localhost:8000/{{$order->order_code}}/show-order-detail">Xem chi tiết trên web</a>
                </div>
            </div>
        </div>
        <div style="padding: 20px">
            <p>Mọi thắc mắc vui lòng liên hệ qua số Hotline: <a href="tel:0987987789">0987.987.789</a></p>
            <p>hoặc phản hồi trực tiếp cho chúng tôi <a href="mailto:nguyenhjnh2002@gmail.com">tại đây</a></p>
            <p>Trân trọng!</p>
        </div>
    </div>
</div>
</body>
</html>
