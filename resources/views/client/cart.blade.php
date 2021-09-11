
@extends('client.layouts.master')
@section('title','Contactus')
@section('contactus-css')
    <link rel="stylesheet" href="/libs/client/styles/style.css">
@endsection
@section('cart-js')
    <script type="text/javascript" src="/libs/client/scripts/cart.js"></script>
@endsection
@section('main_content')
    <section class="container">
        <div class="shopping-cart">
            <div class="column-labels">
                <label class="product-image">Image</label>
                <label class="product-details">Product</label>
                <label class="product-price">Giá</label>
                <label class="product-quantity">Số lượng</label>
                <label class="product-removal">Remove</label>
                <label class="product-line-price">Tổng giá</label>
            </div>
            <div class="product">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="checkall" name="check">
                    <label class="custom-control-label" for="checkall">All</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="check1" name="check">
                    <label class="custom-control-label" for="check1"></label>
                </div>
                <br>
                <div class="product-image">
                    <img src="https://lh3.googleusercontent.com/proxy/gpTWeM2351Aef4_rx2x1_L6-mGhGVPYID2SzdwNNCLWI13Qe3JooajR8KSfan_9v1ztlyh3WuTRe0sTNAu6NZSUXRDEnVzsVEt2n3oYeqzIzxulyoaKNb4y4iQ">
                </div>
                <div class="product-details">
                    <div class="product-title">iPhone 12</div>
                    <p class="product-description"> Apple đã trang bị con chip mới nhất của hãng (tính đến 11/2020) cho iPhone 12 đó là A14 Bionic, được sản xuất trên tiến trình 5 nm với hiệu suất ổn định hơn so với chip A13 được trang bị trên phiên bản tiền nhiệm iPhone 11.</p>
                </div>
                <div class="product-price">20.490.000</div>
                <div class="product-quantity">
                    <input type="number" value="2" min="1">
                </div>
                <div class="product-removal">
                    <button class="remove-product btn btn-danger">
                        Xóa
                    </button>
                    <br><br>
                    <button class="remove-product btn btn-warning">
                        Cập nhật
                    </button>
                </div>
                <div class="product-line-price">20.490.000</div>
            </div>
            <div class="product">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="check2" name="check">
                    <label class="custom-control-label" for="check2"></label>
                </div>
                <br><br>
                <div class="product-image">
                    <img src="https://cdn1.viettelstore.vn/images/Product/ProductImage/medium/465883758.jpeg">
                </div>
                <div class="product-details">
                    <div class="product-title">iphone 12 Pro Max</div>
                    <p class="product-description">Đẳng cấp từ tên gọi đến từng chi tiết. Ngay từ khi chỉ là tin đồn thì chiếc smartphone này đã làm đứng ngồi không yên bao “fan cứng” nhà Apple, với những nâng cấp vô cùng nổi bật hứa hẹn sẽ mang đến những trải nghiệm tốt nhất về mọi mặt mà chưa một chiếc iPhone tiền nhiệm nào có được.</p>
                </div>
                <div class="product-price">39.990.000</div>
                <div class="product-quantity">
                    <input type="number" value="1" min="1">
                </div>
                <div class="product-removal">
                    <button class="remove-product btn btn-danger">
                        Xóa
                    </button>
                    <br><br>
                    <button class="remove-product btn btn-warning">
                        Cập nhật
                    </button>
                </div>
                <div class="product-line-price">39.990.000</div>
            </div>
            <div class="totals">
                <div class="totals-item">
                    <label>Tổng</label>
                    <div class="totals-value" id="cart-subtotal">60.980.000</div>
                </div>
                <div class="totals-item">
                    <label>Thuế (5%)</label>
                    <div class="totals-value" id="cart-tax"></div>
                </div>
                <div class="totals-item">
                    <label>Phí ship</label>
                    <div class="totals-value" id="cart-shipping"></div>
                </div>
                <div class="totals-item totals-item-total">
                    <label>Tổng cộng</label>
                    <div class="totals-value" id="cart-total">60.980.000</div>
                </div>
            </div>
            <button class="checkout">Thanh toán</button>
        </div>
    </section>


@endsection



