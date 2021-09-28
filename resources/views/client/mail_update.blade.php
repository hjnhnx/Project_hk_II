<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            font-family: sans-serif;
            color: #818181;
        }
        table , th ,td {
            border: #d2d2d2 1px solid;
            text-align: center;
        }
        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<div style="min-height: 300px;width: 600px;border: #c5c5c5 1px solid;margin: 100px auto;padding: 10px">
    <h2 style="margin: 0">Sun mobile</h2>
    <h3 style="margin: 0">#{{$order->order_code}}</h3>
    <h4>Đơn hàng của bạn đã được cập nhật</h4>
    <table cellspacing="0" cellpadding="10"  style="margin: auto;width: 100%">
        <thead>
        <tr>
            <th>Tên sản phẩm</th>
            <th>Màu</th>
            <th>Ảnh</th>
            <th>Cấu hình</th>
        </tr>
        </thead>
        <tbody>

        @foreach($order_details as $order_detail)
            <tr>
                <td>{{\App\Models\Product::find($order_detail->product_option->product_id)->name}}</td>
                <td>{{\App\Models\Color::find($order_detail->product_option->color_id)->name}}</td>
                <td><img src="{{$order_detail->product_option->thumbnail}}" alt="" width="70px" height="70px" style="object-fit: cover"></td>
                <td>{{$order_detail->product_option->ram}}GB/RAM
                    - {{$order_detail->product_option->rom}}GB/ROM</td>
            </tr>
        @endforeach

        </tbody>
    </table>
    <p>Trạng thái đơn hàng : <span style="color: #ff4e4e">@if($order->status == \App\Enums\OrderStatus::Create)
                Chờ lấy hàng
            @elseif($order->status == \App\Enums\OrderStatus::Delivery)
                Đang giao hàng
            @elseif($order->status == \App\Enums\OrderStatus::Complete)
                Đã nhận hàng
            @elseif($order->status == \App\Enums\OrderStatus::Cancel)
                Đã hủy đơn hàng
            @endif</span></p>
    <p>Trạng thái thanh toán : <span style="color: #ff3e3e">
            {{$order->is_checkout == \App\Enums\CheckoutStatus::UNPAID ? 'Chưa thanh toán' : 'Đã thanh toán'}}
        </span></p>
    <a href="http://sun-mobile.herokuapp.com/{{$order->order_code}}/show-order-detail">Xem chi tiết trên web</a>
    <p>Thắc mắc xin liên hệ : <a href="tel:0987987789" style="color: #3f3ffd">0987.987.789</a></p>
    <p>Hoặc phản hồi : <a href="mailto:nguyenhjnh2002@gmail.com" style="color: #3f3ffd">tại đây</a></p>
</div>
</body>
</html>
