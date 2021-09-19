
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
<h3>Bạn đã đặt hàng thành công !</h3>

<p>Thông tin đơn hàng của bạn.</p>

<p>Mã đơn hàng: # {{$order->order_code}}</p>

<p>Ngày đặt hàng: {{date_format($order->created_at,'d/m/Y')}}</p>

<p>Chi tiết sản phẩm</p>

<table border="1" cellspacing="0" cellpadding="10" width="400">
    <thead>
    <tr>
        <th>STT</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Thành tiền</th>
    </tr>
    </thead>
    <tbody>
    @foreach($order_detail as $key=>$item)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{\App\Models\Product::find(\App\Models\Product_option::find($item->product_option_id)->product_id)->name}}</td>
            <td>{{number_format($item->unit_price)}} vnđ</td>
            <td>{{$item->quantity}}</td>
            <td>{{number_format($item->unit_price * $item->quantity)}} vnđ</td>
        </tr>
    @endforeach
    </tbody>
</table>
<h3>Tổng giá trị kiện hàng : {{number_format($order->total_price)}} vnđ</h3>
<p>Mọi thắc mắc vui lòng liên hệ qua số Hotline: <a href="tel:0987987789">0987.987.789</a></p>
<p>hoặc phản hồi trực tiếp cho chúng tôi <a href="mailto:nguyenhjnh2002@gmail.com">tại đây</a></p>
<p>Trân trọng!</p>
</body>
</html>
