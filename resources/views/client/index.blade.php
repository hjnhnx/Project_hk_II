@extends('client.layouts.master')
@section('title','Trang Chủ')
@section('custom_style')
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-61177547f7ce676c"></script>
@endsection

@section('main_content')
        <section class="products">
            <div class="container">
                <div id="" class="product-area product-area-0">
                    <div class="product-header">
                        <p class="title">Các mẫu smartphone hot</p>
                    </div>
                    <div class="product-content">
                        <div class="list-products">
                            @foreach($p_hot as $key=>$item)
                                <div class="product-item-home product product-item-list {{$key == 5 ? 'hidden_item' :'' }}">
                                    <div class="product-top">
                                        <div class="sale-off" style="height: 19px;display: {{$item->discount == 0 ? 'none' :''}}">Giảm {{$item->discount}} %</div>
                                    </div>
                                    <div class="product-mid">
                                        <div class="product-image">
                                            <a href="{{route('product_detail',$item->slug)}}"><img src="{{$item->thumbnail}}"
                                                                                                   style="height: 100%;width: 100%;object-fit: cover"></a>
                                        </div>
                                        <h3 class="product-name"><a
                                                href="https://www.hnammobile.com/dien-thoai/samsung-galaxy-s21-ultra-5g-g998-256gb.21524.html">{{$item->name}}</a></h3>
                                        <div class="product-price ">
                                            <b>{{number_format($item->price - $item->price * $item->discount/100 )}} vnđ</b><span style="display: {{$item->discount == 0 ? 'none' :''}}"><del>{{number_format($item->price) }} vnđ</del></span></div>
                                    </div>
                                    <div class="product-bottom">
                                        <a slot="{{$item->id}}" rel="nofollow"  class="btn buy-now" data-toggle="modal" data-target="#exampleModalLong">Đặt hàng ngay</a>
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
        <section class="products">
            <div class="container">
                <div id="" class="product-area product-area-0">
                    <div class="product-header">
                        <p class="title">Các mẫu smartphone mới nhất</p>
                    </div>
                    <div class="product-content">
                        <div class="list-products">
                            @foreach($p_new as $key=>$item)
                                <div class="product-item-home product product-item-list {{$key == 5 ? 'hidden_item' :'' }}">
                                    <div class="product-top">
                                        <div class="sale-off" style="height: 19px;display: {{$item->discount == 0 ? 'none' :''}}">Giảm {{$item->discount}} %</div>
                                    </div>
                                    <div class="product-mid">
                                        <div class="product-image">
                                            <a href="{{route('product_detail',$item->slug)}}"><img src="{{$item->thumbnail}}"
                                                                                                   style="height: 100%;width: 100%;object-fit: cover"></a>
                                        </div>
                                        <h3 class="product-name"><a
                                                href="https://www.hnammobile.com/dien-thoai/samsung-galaxy-s21-ultra-5g-g998-256gb.21524.html">{{$item->name}}</a></h3>
                                        <div class="product-price ">
                                            <b>{{number_format($item->price - $item->price * $item->discount/100 )}} vnđ</b><span style="display: {{$item->discount == 0 ? 'none' :''}}"><del>{{number_format($item->price) }} vnđ</del></span></div>
                                    </div>
                                    <div class="product-bottom">
                                        <a slot="{{$item->id}}" rel="nofollow"  class="btn buy-now" data-toggle="modal" data-target="#exampleModalLong">Đặt hàng ngay</a>
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
        <section class="products">
            <div class="container">
                <div id="" class="product-area product-area-0">
                    <div class="product-header">
                        <p class="title">Các mẫu smartphone đang giảm giá</p>
                    </div>
                    <div class="product-content">
                        <div class="list-products">
                            @foreach($p_sale as $key=>$item)
                                <div class="product-item-home product product-item-list {{$key == 5 ? 'hidden_item' :'' }}">
                                    <div class="product-top">
                                        <div class="sale-off" style="height: 19px;display: {{$item->discount == 0 ? 'none' :''}}">Giảm {{$item->discount}} %</div>
                                    </div>
                                    <div class="product-mid">
                                        <div class="product-image">
                                            <a href="{{route('product_detail',$item->slug)}}"><img src="{{$item->thumbnail}}"
                                                                                                   style="height: 100%;width: 100%;object-fit: cover"></a>
                                        </div>
                                        <h3 class="product-name"><a
                                                href="https://www.hnammobile.com/dien-thoai/samsung-galaxy-s21-ultra-5g-g998-256gb.21524.html">{{$item->name}}</a></h3>
                                        <div class="product-price ">
                                            <b>{{number_format($item->price - $item->price * $item->discount/100 )}} vnđ</b><span style="display: {{$item->discount == 0 ? 'none' :''}}"><del>{{number_format($item->price) }} vnđ</del></span></div>
                                    </div>
                                    <div class="product-bottom">
                                        <a slot="{{$item->id}}" rel="nofollow"  class="btn buy-now" data-toggle="modal" data-target="#exampleModalLong">Đặt hàng ngay</a>
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
        <section class="products">
            <div class="container">
                <div id="" class="product-area product-area-0">
                    <div class="product-header">
                        <p class="title">Các mẫu smartphone Cao cấp</p>
                    </div>
                    <div class="product-content">
                        <div class="list-products">
                            @foreach($p_flagship as $key=>$item)
                                <div class="product-item-home product product-item-list {{$key == 5 ? 'hidden_item' :'' }}">
                                    <div class="product-top">
                                        <div class="sale-off" style="height: 19px;display: {{$item->discount == 0 ? 'none' :''}}">Giảm {{$item->discount}} %</div>
                                    </div>
                                    <div class="product-mid">
                                        <div class="product-image">
                                            <a href="{{route('product_detail',$item->slug)}}"><img src="{{$item->thumbnail}}"
                                                                                                   style="height: 100%;width: 100%;object-fit: cover"></a>
                                        </div>
                                        <h3 class="product-name"><a
                                                href="https://www.hnammobile.com/dien-thoai/samsung-galaxy-s21-ultra-5g-g998-256gb.21524.html">{{$item->name}}</a></h3>
                                        <div class="product-price ">
                                            <b>{{number_format($item->price - $item->price * $item->discount/100 )}} vnđ</b><span style="display: {{$item->discount == 0 ? 'none' :''}}"><del>{{number_format($item->price) }} vnđ</del></span></div>
                                    </div>
                                    <div class="product-bottom">
                                        <a slot="{{$item->id}}" rel="nofollow"  class="btn buy-now" data-toggle="modal" data-target="#exampleModalLong">Đặt hàng ngay</a>
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
        <section class="products">
            <div class="container">
                <div id="" class="product-area product-area-0">
                    <div class="product-header">
                        <p class="title">Các mẫu smartphone cận cao cấp</p>
                    </div>
                    <div class="product-content">
                        <div class="list-products">
                            @foreach($p_midrange as $key=>$item)
                                <div class="product-item-home product product-item-list {{$key == 5 ? 'hidden_item' :'' }}">
                                    <div class="product-top">
                                        <div class="sale-off" style="height: 19px;display: {{$item->discount == 0 ? 'none' :''}}">Giảm {{$item->discount}} %</div>
                                    </div>
                                    <div class="product-mid">
                                        <div class="product-image">
                                            <a href="{{route('product_detail',$item->slug)}}"><img src="{{$item->thumbnail}}"
                                                                                                   style="height: 100%;width: 100%;object-fit: cover"></a>
                                        </div>
                                        <h3 class="product-name"><a
                                                href="https://www.hnammobile.com/dien-thoai/samsung-galaxy-s21-ultra-5g-g998-256gb.21524.html">{{$item->name}}</a></h3>
                                        <div class="product-price ">
                                            <b>{{number_format($item->price - $item->price * $item->discount/100 )}} vnđ</b><span style="display: {{$item->discount == 0 ? 'none' :''}}"><del>{{number_format($item->price) }} vnđ</del></span></div>
                                    </div>
                                    <div class="product-bottom">
                                        <a slot="{{$item->id}}" rel="nofollow"  class="btn buy-now" data-toggle="modal" data-target="#exampleModalLong">Đặt hàng ngay</a>
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
        <section class="products">
            <div class="container">
                <div id="" class="product-area product-area-0">
                    <div class="product-header">
                        <p class="title">Các mẫu smartphone giá rẻ</p>
                    </div>
                    <div class="product-content">
                        <div class="list-products">
                            @foreach($p_cheap as $key=>$item)
                                <div class="product-item-home product product-item-list {{$key == 5 ? 'hidden_item' :'' }}">
                                    <div class="product-top">
                                        <div class="sale-off" style="height: 19px;display: {{$item->discount == 0 ? 'none' :''}}">Giảm {{$item->discount}} %</div>
                                    </div>
                                    <div class="product-mid">
                                        <div class="product-image">
                                            <a href="{{route('product_detail',$item->slug)}}"><img src="{{$item->thumbnail}}"
                                                                                                   style="height: 100%;width: 100%;object-fit: cover"></a>
                                        </div>
                                        <h3 class="product-name"><a
                                                href="https://www.hnammobile.com/dien-thoai/samsung-galaxy-s21-ultra-5g-g998-256gb.21524.html">{{$item->name}}</a></h3>
                                        <div class="product-price ">
                                            <b>{{number_format($item->price - $item->price * $item->discount/100 )}} vnđ</b><span style="display: {{$item->discount == 0 ? 'none' :''}}"><del>{{number_format($item->price) }} vnđ</del></span></div>
                                    </div>
                                    <div class="product-bottom">
                                        <a slot="{{$item->id}}" rel="nofollow"  class="btn buy-now" data-toggle="modal" data-target="#exampleModalLong">Đặt hàng ngay</a>
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
