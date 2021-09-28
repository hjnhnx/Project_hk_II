@extends('client.layouts.master')
@section('title','Shopping cart')
@section('custom_style')
    <style>
        .container {
            color: #7a7979;
        }
    </style>
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
@endsection
@section('main_content')
    <section class="container content_cart">
        <div class="col-12 p-3">
            <h2>Đơn hàng # {{$order->order_code}}</h2>
            <hr>
            <h4>{{$order->ship_name}}</h4>
            <table class="table mt-3 mb-3 table_show_order_destop">
                <thead>
                <tr>
                    <th scope="col">Mã đơn hàng</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Email</th>
                    <th scope="col">địa chỉ</th>
                    <th scope="col">Tổng giá trị</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row"># {{$order->order_code}}</th>
                    <td>{{$order->ship_phone}}</td>
                    <td>{{$order->ship_email}}</td>
                    <td>{{$order->ship_address}}</td>
                    <td>{{number_format($order->total_price)}} vnđ</td>
                </tr>
                </tbody>
            </table>
            <div style="width: 100%;display: none" class="table_show_order_mobile">
                <p style="font-weight: 600" class="m-0">Số điện thoại : {{$order->ship_phone}}</p>
                <p style="font-weight: 600" class="m-0">Email : {{$order->ship_email}}</p>
                <p style="font-weight: 600" class="m-0">Địa chỉ : {{$order->ship_address}}</p>
                <p style="font-weight: 600" class="m-0">Giá trị đơn hàng : <span style="font-weight: 600"
                                                                                 class="text-danger">{{number_format($order->total_price)}} vnđ</span>
                </p>
                <p style="font-weight: 600" class="m-0">Mã đơn hàng : #<span class="text-danger"
                                                                             id="order_code"> {{$order->order_code}}</span>
                    <span onclick="copyToClipboard('order_code')" class="text-primary"
                          style="cursor: pointer">copy</span>
                </p>
            </div>
            <br>
            <p class="m-0">Chi tiết</p>
            <div style="width: 100%" class="row m-0 p-0">
                @foreach($order->order_detail as $item)
                    <div style="height: 150px" class="col-12 col-xl-6 col-md-6 col-sm-12 border mt-2 p-2">
                        <div style="height: 80%" class="">
                            <div style="height: 70%" class=" row m-0 p-0">
                                <img class="d-block" style="height: 100%;width: 82px;object-fit: cover"
                                     src="{{\App\Models\Product_option::find($item->product_option_id)->thumbnail}}"
                                     alt="">
                                <div class="col">
                                    <p>Số lượng : {{$item->quantity}}</p>
                                    <p>Giá / 1 sản phẩm : {{number_format($item->unit_price)}}</p>
                                </div>
                            </div>
                            <p class="pl-2 pt-1" style="font-weight: 400;font-size: 14px"><span
                                    style="display: inline-block;transform: translateY(2px);margin-right: 3px;background: {{\App\Models\Color::find(\App\Models\Product_option::find($item->product_option_id)->color_id)->color_code}};height: 13px;width: 13px"></span>{{\App\Models\Product::find(\App\Models\Product_option::find($item->product_option_id)->product_id)->name}}
                                ({{\App\Models\Product_option::find($item->product_option_id)->ram}}
                                / {{\App\Models\Product_option::find($item->product_option_id)->rom}}GB)</p>
                        </div>
                        <p class="pl-2 pt-1">Thành tiền : <span class="text-danger">{{number_format($item->unit_price * $item->quantity)}} vnđ</span>
                        </p>
                    </div>
                @endforeach
            </div>
            <hr>
            <p class="text-center">Chọn phương pháp thanh toán</p>
            <div class="row m-0 p-0">
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 d-block p-2">
                    <button style="height: 50px;width: 100%"><a class="d-flex justify-content-center align-items-center"
                                                                href="{{route('mail_send',$order->id)}}"
                                                                style="height: 100%;width: 100%;text-decoration: none;color: white">Thanh
                            toán khi nhận hàng</a></button>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 d-block p-2">
                    <button style="height: 50px;width: 100%;background: #b13030"><a
                            href="{{route('payment',$order->id)}}"
                            class="d-flex justify-content-center align-items-center"
                            style="height: 100%;width: 100%;text-decoration: none;color: white">Thanh toán với vnpay</a>
                    </button>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 d-block p-2">
                    <button data-toggle="modal" data-target="#exampleModall3" style="height: 50px;width: 100%;background: #12ce38"><a class="d-flex justify-content-center align-items-center"
                            style="height: 100%;width: 100%;text-decoration: none;color: white">Chuyển Khoản</a>
                    </button>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 d-block p-2">
                    <button style="height: 50px;width: 100%;background: #25319c">
                        <div id="paypal-button"></div>
                    </button>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModall3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="width: 100%">
                        <h5 class="modal-title" id="exampleModalLabel">Thanh toán với hình thức chuyển khoản</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Mã số thẻ : <span style="font-weight: 600">45210000938938</span></p>
                        <p>Ngân hàng : <span style="font-weight: 600">BIDV</span></p>
                        <p>Họ tên chủ thẻ : <span style="font-weight: 600">NGUYEN XUAN HINH</span></p>
                        <p>Nội dung : <span style="font-weight: 600">Thanh toán đơn hàng :(Mã đơn hàng) cho SUN MOBILE</span></p>
                        <p>Ví dụ : <span style="font-weight: 600">Thanh toán đơn hàng :00009999 cho SUN MOBILE</span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('custom_js')
    <script>
        function copyToClipboard(elementId) {

            // Create a "hidden" input
            var aux = document.createElement("input");

            // Assign it the value of the specified element
            aux.setAttribute("value", document.getElementById(elementId).innerHTML);

            // Append it to the body
            document.body.appendChild(aux);

            // Highlight its content
            aux.select();

            // Copy the highlighted text
            document.execCommand("copy");

            // Remove it from the body
            document.body.removeChild(aux);

            document.getElementById('order_code').classList.add('text-secondary')
            document.getElementById('order_code').classList.remove('text-danger')

        }

        paypal.Button.render({
            style: {
                shape: 'rect',
                tagline: false
            },
            env: 'sandbox', // Or 'production'
            payment: function (data, actions) {
                return actions.request.post('/paypal_payment/create', {
                    id: {{$order->id}},
                })
                    .then(function (res) {
                        console.log(res)
                        return res.id;
                    });
            },
            onAuthorize: function (data, actions) {
                return actions.request.post('/paypal_payment/execute-payment', {
                    paymentID: data.paymentID,
                    payerID: data.payerID
                })
                    .then(function (res) {
                        window.location.href = '{{route('payment_success',$order->id)}}'
                        console.log(res)
                        return res
                    });
            }
        }, '#paypal-button');
    </script>

@endsection
