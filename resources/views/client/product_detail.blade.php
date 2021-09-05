@extends('client.layouts.master')
@section('title',$detail->name)
@section('custom_style')
    <style>
        .images::-webkit-scrollbar {
            width: 0;
        }
        .product_image {
            cursor: pointer;
        }
        .option_active {
            border: #f88989 2px solid!important;
        }
    </style>
@endsection
@section('main_content')
    <div class="container">
        <div class="row col-12" style="margin: 0;box-sizing: border-box">
            <div class="col-7 row" style="height: 500px;padding: 0">
                <div class="col-2 images"
                     style="overflow: scroll;height: 100%;padding-top: 3px;border-bottom: #c1c1c1 1px solid">
                    @for( $i=0 ; $i<sizeof(json_decode($detail->images,true)) ; $i++)
                        <img class="product_image"
                             style="border: #fe8989 2px solid;width: 100%;height: 90px;object-fit: cover;border-radius: 5px;margin-bottom: 5px"
                             src="{{json_decode($detail['images'],true)[$i]}}" alt="">
                    @endfor
                </div>
                <div class="col-10" style="height: 100%;padding: 0 25px 0 5px;">
                    <img class="show_image" src="{{$detail->thumbnail}}" alt=""
                         style="height: 100%;width: 100%;object-fit: cover;border-radius: 5px">
                </div>
                <div class="col-11 pt-2" style="padding-right: 10px;overflow: hidden">
                    <marquee behavior="" direction="">{{$detail->description}}</marquee>
                </div>
                <div class="col-12 pt-4 row">
                    <div class="col-6">
                        <button style="width: 100%;height: 55px">Mua ngay</button>
                    </div>
                    <div class="col-6">
                        <button style="width: 100%;height: 55px;background: #30a4fe">Thêm vào giỏ hàng</button>
                    </div>
                </div>
            </div>
            <div class="col row p-0">
                <div class="col-12 pl-4" style="padding-right: 0">
                    <h3 class="text-secondary">{{$detail->name}}</h3>
                    <h5 class="text-secondary">Giá : <span
                            class="text-danger sale_price">$ {{$detail->price - $detail->price * $detail->discount/100 }}</span>
                        <span class="text-secondary price"
                              style="text-decoration: line-through;font-size: 18px;display: {{$detail->discount == 0 ? 'none' : ''}}">{{$detail->discount != 0 ? '$ ' . $detail->price : ''}}</span>
                    </h5>
                    <p class="text-secondary m-0"
                       style="font-size: 16px">{{$detail->discount != 0 ? 'Khuyến mãi : ' . $detail->discount . '%' : ''}}</p>
                    <p class="text-secondary m-0">options</p>
                    <div class="row col-12 p-0 m-0">

                        @for($i = 0 ; $i < sizeof($detail->product_option) ; $i++)
                            <div slot="{{$detail->product_option[$i]->thumbnail}}~!!!~{{$detail->price+$detail->product_option[$i]->price - ($detail->price+$detail->product_option[$i]->price) * $detail->discount/100 }}~!!!~{{$detail->price+$detail->product_option[$i]->price}}" class="col-6 border p-1 choice_option" style="height: 80px;padding: 0;cursor: pointer">
                                <div style="height: 100%;width: 80px;float: left;padding-right: 5px">
                                    <img style=";object-fit: cover;height: 100%;width: 100%"
                                         src="{{$detail->product_option[$i]->thumbnail}}" alt="">
                                </div>
                                <div style="height: 100%;float: left">
                                    <span
                                        style="height: 20px;width: 20px;background: {{\App\Models\Color::find($detail->product_option[$i]->color_id)->color_code}};display:inline-block;border-radius:50%"></span>
                                    <span
                                        style="height: 25px;display:inline-block;transform: translateY(-6px);font-size: 14px;font-weight: bold">{{\App\Models\Color::find($detail->product_option[$i]->color_id)->name}}</span>
                                    <p style="height: 10px;margin: 0;transform: translateY(-6px)">Giá : <span
                                            class="text-danger">$ {{$detail->price+$detail->product_option[$i]->price - ($detail->price+$detail->product_option[$i]->price) * $detail->discount/100 }} </span><span
                                            class="text-secondary"
                                            style="text-decoration: line-through;font-size: 14px;display: {{$detail->discount == 0 ? 'none' : ''}}">$ {{$detail->price+$detail->product_option[$i]->price}}</span>
                                    </p>
                                    <p style="height: 10px;margin: 0;transform: translateY(8px);font-size: 13px">{{$detail->product_option[$i]->ram}}
                                        Gb/ram-{{$detail->product_option[$i]->rom}}Gb/rom</p>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <hr>
                    <div class="col-12 m-0 p-0">
                        {!! $detail->content_detail !!}
                    </div>
                </div>
            </div>
            <div class="col-12" style="height: 120px">
            </div>
        </div>
    </div>

    <section class="products">
        <div class="container">
            <div id="" class="product-area product-area-0">
                <div class="product-header">
                    <p class="title">Các sản phẩm liên quan</p>
                </div>
                <div class="product-content">
                    <div class="list-products">
                        @foreach(\App\Models\Product::query()->where('brand_id',$detail->brand_id)->where('id','!=',$detail->id)->orderBy('id','DESC')->take(5)->get() as $item)
                            <div class="product-item-home product product-item-list">
                                <div class="product-top">
                                    <div class="sale-off" style="height: 19px;display: {{$item->discount == 0 ? 'none' :''}}">Giảm {{$item->discount}} %</div>
                                </div>
                                <div class="product-mid">
                                    <div class="product-image">
                                        <img src="{{$item->thumbnail}}" style="height: 100%;width: 100%;object-fit: cover">
                                    </div>
                                    <h3 class="product-name"><a
                                            href="https://www.hnammobile.com/dien-thoai/samsung-galaxy-s21-ultra-5g-g998-256gb.21524.html">{{$item->name}}</a></h3>
                                    <div class="product-price ">
                                        <b>$ {{$item->price - $item->price * $item->discount/100 }}</b><span><del>$ {{$item->price}}</del></span></div>
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
        $('.product_image').click(function () {
            $('.show_image').attr('src', this.src)
        })
        $('.choice_option').click(function (){
            $('.option_active').removeClass('option_active')
            this.classList.add('option_active')
            var image = this.slot.split('~!!!~')[0]
            var sale_price = this.slot.split('~!!!~')[1]
            var price = this.slot.split('~!!!~')[2]
            $('.show_image').attr('src',image)
            $('.sale_price').html('$ '+sale_price)
            $('.price').html('$ '+price)
        })
    </script>
@endsection
