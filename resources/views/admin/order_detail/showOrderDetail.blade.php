@extends('.admin.layouts.master')
@section('custom_style')
    <style>
        @yield('custom_style_level_2')
        .table_header {
            position: relative;
        }

    </style>
@endsection

@section('main_content')
    <h1 style="text-align: center">chi tiết đơn hàng</h1>
    <div class=" container">
        <div class=" row  justify-content-center" style="display: flex">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                <h3>Địa chỉ nhận hàng:</h3>
                <div class="col-12">
                    <p><strong>Mã người dùng</strong>: 01</p>
                    <p><strong>Họ và tên người dùng:</strong> Vũ Hoàng Ngọc Anh</p>
                    <p><strong>Số điện thoại:</strong> 0987654JQk</p>
                    <p><strong>Email:</strong> jimmianh1807@gmail.com</p>
                    <p><strong>Địa chỉ:</strong> z129, Đội Bình, Yên Sơn, Tuyên Quang</p>
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                <h3>Thông tin vận chuyển</h3>
                <div class="col-12">
                    <p><strong>Phương thức vận chuyển:</strong> Nhanh</p>
                    <p><strong>Đơn vị vận chuyển:</strong> beatVn</p>
                    <p><strong>Phương thức thanh toán:</strong> thanh toán khi nhận hàng</p>
                    <p><strong>Trạng thái đơn hàng:</strong> đang chờ giao hàng</p>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <h3>Thông tin đặt hàng</h3>
                <div class="col-lg-3">
                    <div><img  src="//cdn.tgdd.vn/Products/Images/42/235971/xiaomi-redmi-note-10-5g-xanh-la-1-org.jpg"
                              alt=""
                              style="width: 100px;height: 100px; object-fit: cover">
                    </div>
                </div>
                <div class="col-lg-5">
                    <p><strong>Tên sản phẩm:</strong> Điện thoại ai phôn mười hai plus</p>
                    <p><strong>Số lượng:</strong> 2</p>
                    <p><strong>Giá:</strong> 9000</p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" >
                <h3>Thanh toán </h3>
                <div class="col-lg-6">
                    <p><strong>Tổng tiền hàng:</strong> 18000</p>
                    <p><strong>Phí vận chuyển:</strong> 15000</p>
                    <p><strong>Tổng số tiền:</strong> 33000</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')
    <script>
        $('.sorted').change(function () {
            $('.form_filter').submit()
        })
        $('.sorted2').change(function () {
            $('.form_filter2').submit()
        })

        $('.btn_show_video').click(function () {
            $('.show_video').attr('src', this.slot)
        })
        $('.close_video').click(function () {
            $('.show_video').attr('src', '')
        })

        function changeStatus(id) {
            var perPage = window.location.href.split("/")[4];
            var page = perPage.split('?')[0]
            var protocol = window.location.protocol
            var host = window.location.hostname
            var port = window.location.port
            var url = protocol + '//' + host + ':' + port
            $.get(`${url}/admin/${page}/update-status/${id}`, function (data) {
            });
        }
    </script>
    @yield('Extra_JS')
@endsection
