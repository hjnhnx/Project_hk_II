<!DOCTYPE html>
<html lang="vi">
@include('client.components.head')
<body class="">
<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>
<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "104971075277777");
    chatbox.setAttribute("attribution", "biz_inbox");
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v12.0'
        });
    };
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

@include('client.components.header')
<main id="main" style="margin-top: 10px">
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
                    <form action="{{route('create_order')}}" method="post" class="col-12 d-block">
                        @if(!\Illuminate\Support\Facades\Auth::check())
                            <p class="text-danger">Chúng tôi khuyến nghị bạn nên tạo một tài khoản thành viên , (hoặc đăng nhập nếu đã có tài khoản) trước khi đặt hàng để dễ dàng theo dõi đơn hàng của mình hơn</p>
                        @endif
                        @csrf
                        <input type="hidden" name="total_price" class="form-control total_price">
                        <input type="hidden" name="all_id" class="form-control all_id">
                        <input type="hidden" name="no_cart" class="form-control no_cart">

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
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="width: 100%">
                    <input type="hidden" id="option_id">
                    <h5 class="modal-title" id="exampleModalLongTitle">Chọn phiên bản</h5>
                </div>
                <div class="modal-body p-2">
                    <img class="d-block m-auto show_image" style="height: 300px;width: 300px;object-fit: cover" src="" alt="">
                    <div style="height: 100px;width: 100%;overflow: scroll;padding: 0!important;" class="list_images_product mt-2">
                        <div class="row m-0 p-0 show_mini_images" style="width: 1500px;height: 100%"></div>
                    </div>
                    <div style="width: 100%">
                        <h3 class="text-center product_name"></h3>
                        <p style="font-size: 20px" class="pl-3"><span class="text-danger after_price sale_price"></span> <span class="text-secondary before_price price" style="font-size: 16px;text-decoration: line-through" ></span></p>
                    </div>
                    <div style="width: 100%" class="show_option"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Bỏ qua</button>
                    <button type="button" class="btn btn-secondary exampleModal1" data-toggle="modal" data-target="#exampleModal1" style="display: none!important;"></button>
                    <button type="button" class="btn btn-primary btn_buy_now" data-dismiss="modal">Đặt hàng</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal_menu d-none" id="modal_menu"
         style="height: 1000px;width: 100%;position: fixed;top: 0;z-index: 1234567890;background: rgba(0,0,0,0.7)">
        <ul>
            <li><a href="{{route('home_page')}}">Trang chủ</a></li>
            <li><a href="{{route('product')}}">Sản phẩm</a></li>
            <li><a href="{{route('contactus_view')}}">Liên hệ</a></li>
            @if(!\Illuminate\Support\Facades\Auth::check())
                <li><a href="{{route('login_register')}}">Đăng nhập / đăng kí</a></li>
            @endif
            <li><a href="{{route('view_about_us')}}">Về chúng tôi</a></li>
            <li><a href="{{route('user_profile')}}">Thông tin cá nhân</a></li>
            <li><a href="{{route('list_order_client')}}">Đơn hàng</a></li>
        </ul>
        <span id="close_modal_menu">&times;</span>
    </div>
    @csrf
    @include('client.components.banner')
    @yield('main_content')
</main>
@include('client.components.footer')
@include('client.components.script')
<a class="call_now" href="tel:0369042217"><i class="fas fa-phone-alt"></i></a>
</body>
</html>
