
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Bạn đã đặt hàng thành công !</h1>
<h2>Thông tin đơn hàng của bạn.</h2>
<br>
<div class="container">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h3><b>Địa chỉ nhận hàng:</b></h3>
            <div class="col-lg-6 p-0">
                <p><strong>Họ và tên người dùng:</strong> {{$order->ship_name}}</p>
                <p><strong>Số điện thoại:</strong> {{$order->ship_phone}}</p>
                <p><strong>Email:</strong> {{$order->ship_email}}</p>
                <p><strong>Địa chỉ:</strong> {{$order->ship_address}}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
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
                <p><strong>Trạng thái thanh toán:</strong>{{$order->is_checkout == \App\Enums\CheckoutStatus::UNPAID ? 'Chưa thanh toán' : 'Đã thanh toán'}}</p>
            </div>
        </div>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h3><b>Chi tiết đơn hàng</b></h3>
            <div class="col-lg-12 p-0">
                <table border="1" cellspacing="0" cellpadding="10" width="600">
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
                            <td><img src="{{$order_detail->product_option->thumbnail}}" alt="" width="50%"></td>
                            <td>{{$order_detail->product_option->ram}}GB/RAM
                                - {{$order_detail->product_option->rom}}GB/ROM
                            </td>
                            <td>{{number_format($order_detail->unit_price)}} vnđ</td>
                            <td>{{$order_detail->quantity}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="col-lg-5 ">
                    <p><strong>Tổng tiền hàng: </strong>{{number_format($order->total_price)}} vnđ</p>
                    <p><strong>Mã đơn hàng: </strong>#{{$order->order_code}}</p>
                    <p><strong>Ngày tạo: </strong>{{$order_detail->created_at}}</p>
                    <p><strong>Thanh toán: </strong>{{$order->is_checkout == \App\Enums\CheckoutStatus::UNPAID ? 'Chưa thanh toán' : 'Đã thanh toán'}}</p>
                    <a href="">Xem chi tiết</a>
                </div>
            </div>
        </div>
    </div>
</div>
<p>Mọi thắc mắc vui lòng liên hệ qua số Hotline: <a href="tel:0987987789">0987.987.789</a></p>
<p>hoặc phản hồi trực tiếp cho chúng tôi <a href="mailto:nguyenhjnh2002@gmail.com">tại đây</a></p>
<p>Trân trọng!</p>
</body>
</html>
