@extends('client.layouts.master')
@section('title','Trang Chủ')

@section('main_content')
    @foreach($brands as $item)
        <section class="products" style="display: {{sizeof($item->product) < 1 ? 'none' : 'block'}}">
            <div class="container">
                <div id="" class="product-area product-area-0">
                    <div class="product-header">
                        <p class="title">Điện thoại {{$item->name}} mới nhất</p>
                        <a rel="nofollow" href="" class="view-all">Xem tất cả <i class="lazy-class ic" data-class="ic_chervon_right-black"></i></a>
                    </div>
                    <div class="product-content">
                        <div class="list-products">
                            @for($i = sizeof($item->product)-1 ; $i >= 0 ; $i--)
                                @if(sizeof($item->product)-1 - $i == 5)
                                    @break
                                @endif
                                <div class="product-item-home product product-item-list">
                                    <div class="product-top">
                                        <div class="sale-off" style="height: 19px;display: {{$item->product[$i]->discount == 0 ? 'none' :''}}">Giảm {{$item->product[$i]->discount}} %</div>
                                    </div>
                                    <div class="product-mid">
                                        <div class="product-image">
                                            <img src="{{$item->product[$i]->thumbnail}}" style="height: 100%;width: 100%;object-fit: cover">
                                        </div>
                                        <h3 class="product-name"><a
                                                href="https://www.hnammobile.com/dien-thoai/samsung-galaxy-s21-ultra-5g-g998-256gb.21524.html">{{$item->product[$i]->name}}</a></h3>
                                        <div class="product-price ">
                                            <b>{{number_format($item->product[$i]->price - $item->product[$i]->price * $item->product[$i]->discount/100 )}} vnđ</b><span style="display: {{$item->product[$i]->discount == 0 ? 'none' :''}}"><del>{{number_format($item->product[$i]->price) }} vnđ</del></span></div>
                                    </div>
                                    <div class="product-bottom">
                                        <a rel="nofollow" href="https://www.hnammobile.com/cart/add?itemid=21524"
                                           onclick="addToCart(this)" class="btn buy-now">Đặt hàng ngay</a>
                                        <a rel="nofollow"
                                           href="{{route('product_detail',$item->product[$i]->slug)}}"
                                           class="btn pay-0">Xem chi tiết</a>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach

@endsection
