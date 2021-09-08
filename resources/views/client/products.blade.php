@extends('client.layouts.master')
@section('title', 'Products')
@section('custom_style')
    <style>
        .btn_brand {
            height: 40px;
            width: 145px;
            display: inline-block;
            background: none;
            border: #bdbdbd 1px solid;
            color: #6c6c6c;
        }
        .btn_price {
            height: 40px;
            width: 207px;
            display: inline-block;
            background: none;
            border: #bdbdbd 1px solid;
            color: #6c6c6c;
        }
    </style>
@endsection
@section('main_content')
    <section class="products">

        <div class="container">
            <div class="" style="height: auto;margin-right: 0!important;">
                <div class="d-none">
                    <form action="" method="get" id="brand_filter">
                        <input type="text" name="brand_s" id="brand_s">
                        <input type="text" name="price_s" id="price_s">
                    </form>
                </div>
                <button slot="" class="m-1 btn_brand">Tất cả</button>
                @foreach($brands as $item)
                    <button slot="{{$item->name}}" class="m-1 btn_brand">{{$item->name}}</button>
                @endforeach
                <button slot="" class="m-1 btn_price">Mọi mức giá</button>
                <button slot="t->c" class="m-1 btn_price">Giá gốc thấp đến cao</button>
                <button slot="c->t" class="m-1 btn_price">Giá gốc cao đến thấp</button>
                <button slot="<2tr" class="m-1 btn_price">Giá gốc dưới 2tr</button>
                <button slot="2tr->5tr" class="m-1 btn_price">Giá gốc 2tr -> 5tr</button>
                <button slot="5tr->10tr" class="m-1 btn_price">Giá gốc 5tr -> 10tr</button>
                <button slot="10tr->15tr" class="m-1 btn_price">Giá gốc 10tr -> 15tr</button>
                <button slot="15tr->20tr" class="m-1 btn_price">Giá gốc 15tr -> 20tr</button>
                <button slot=">20tr" class="m-1 btn_price">Giá gốc Trên 20tr</button>
                <a href="{{route('product')}}" style="text-decoration: none"><button slot=">20tr" class="m-1 btn_price">Loại bỏ các bộ lọc</button></a>
            </div>

            <div id="" class="product-area product-area-0">
                <div class="product-header">
                    <p class="title">Tất cả sản phẩm</p>
                </div>
                <div class="product-content">
                    <div class="list-products">
                        @if(sizeof($list) < 1)
                            <h2 class="text-secondary mt-4 mb-4">Không tìm thấy sản phẩm nào !</h2>
                        @else
                            @foreach($list as $item)
                                <div class="product-item-home product product-item-list">
                                    <div class="product-top">
                                        <div class="sale-off"
                                             style="height: 19px;display: {{$item->discount == 0 ? 'none' :''}}">
                                            Giảm {{$item->discount}} %
                                        </div>
                                    </div>
                                    <div class="product-mid">
                                        <div class="product-image">
                                            <img src="{{$item->thumbnail}}"
                                                 style="height: 100%;width: 100%;object-fit: cover">
                                        </div>
                                        <h3 class="product-name"><a
                                                href="https://www.hnammobile.com/dien-thoai/samsung-galaxy-s21-ultra-5g-g998-256gb.21524.html">{{$item->name}}</a>
                                        </h3>
                                        <div class="product-price ">
                                            <b>{{number_format($item->price - $item->price * $item->discount/100 )}} vnđ</b><span><del>{{number_format($item->price)}} vnđ</del></span>
                                        </div>
                                    </div>
                                    <div class="product-bottom">
                                        <a rel="nofollow" href="https://www.hnammobile.com/cart/add?itemid=21524"
                                           onclick="" class="btn buy-now">Đặt hàng ngay</a>
                                        <a rel="nofollow"
                                           href="{{route('product_detail',$item->slug)}}"
                                           class="btn pay-0">Xem chi tiết</a>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
            <div id="" class="product-area product-area-0">
                <div class="product-header">
                    <p class="title">Sản phẩm mới</p>
                </div>
                <div class="product-content">
                    <div class="list-products">
                        @foreach($product_new as $item)
                            <div class="product-item-home product product-item-list">
                                <div class="product-top">
                                    <div class="sale-off"
                                         style="height: 19px;display: {{$item->discount == 0 ? 'none' :''}}">Giảm {{$item->discount}} %
                                    </div>
                                </div>
                                <div class="product-mid">
                                    <div class="product-image">
                                        <img src="{{$item->thumbnail}}"
                                             style="height: 100%;width: 100%;object-fit: cover">
                                    </div>
                                    <h3 class="product-name"><a
                                            href="https://www.hnammobile.com/dien-thoai/samsung-galaxy-s21-ultra-5g-g998-256gb.21524.html">{{$item->name}}</a>
                                    </h3>
                                    <div class="product-price ">
                                        <b>{{number_format($item->price - $item->price * $item->discount/100)}} vnđ</b><span><del>{{number_format($item->price)}} vnđ</del></span>
                                    </div>
                                </div>
                                <div class="product-bottom">
                                    <a rel="nofollow" href="https://www.hnammobile.com/cart/add?itemid=21524"
                                       onclick="" class="btn buy-now">Đặt hàng ngay</a>
                                    <a rel="nofollow"
                                       href="{{route('product_detail',$item->slug)}}"
                                       class="btn pay-0">Xem chi tiết</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div id="" class="product-area product-area-0">
                <div class="product-header">
                    <p class="title">Sản phẩm giảm giá</p>
                </div>
                <div class="product-content">
                    <div class="list-products">
                        @foreach($product_sale as $item)
                            <div class="product-item-home product product-item-list">
                                <div class="product-top">
                                    <div class="sale-off"
                                         style="height: 19px;display: {{$item->discount == 0 ? 'none' :''}}">
                                        Giảm {{$item->discount}} %
                                    </div>
                                </div>
                                <div class="product-mid">
                                    <div class="product-image">
                                        <img src="{{$item->thumbnail}}"
                                             style="height: 100%;width: 100%;object-fit: cover">
                                    </div>
                                    <h3 class="product-name"><a
                                            href="https://www.hnammobile.com/dien-thoai/samsung-galaxy-s21-ultra-5g-g998-256gb.21524.html">{{$item->name}}</a>
                                    </h3>
                                    <div class="product-price ">
                                        <b>{{number_format($item->price - $item->price * $item->discount/100)}} vnđ</b><span><del>{{number_format($item->price)}} vnđ</del></span>
                                    </div>
                                </div>
                                <div class="product-bottom">
                                    <a rel="nofollow" href="https://www.hnammobile.com/cart/add?itemid=21524"
                                       onclick="" class="btn buy-now">Đặt hàng ngay</a>
                                    <a rel="nofollow"
                                       href="{{route('product_detail',$item->slug)}}"
                                       class="btn pay-0">Xem chi tiết</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('custom_js')

    <script>
        $('.btn_brand').click(function () {
            $('#brand_s').val(this.slot)
            $('#brand_filter').submit()
        })
        $('.btn_price').click(function () {
            $('#price_s').val(this.slot)
            $('#brand_filter').submit()
        })
    </script>
@endsection
