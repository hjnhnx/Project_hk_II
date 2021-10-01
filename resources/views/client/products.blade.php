@extends('client.layouts.master')
@section('title', 'Products')
@section('custom_style')
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-61177547f7ce676c"></script>
    <style>
        #myDropdown {
            z-index: 3!important;
        }
        .btn_price , .btn_brand {
            padding: 0;
        }
        .btn_price:hover , .btn_brand:hover{
            background: #fd9191!important;
        }
        .dropbtn {
            background-color: #3498DB!important;
            color: white;
            padding: 8px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            width: 230px;
            display: flex;
            z-index: 1000!important;
            justify-content: center;
            margin-bottom: 20px!important;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            overflow: auto;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown a:hover {background-color: #ddd;}

        .show {display: block;}

        button:focus {
            outline: none;
        }

        .btn_brand {
            height: 40px;
            width: 100%;
            display: inline-block;
            background: none;
            border: #bdbdbd 1px solid;
            color: #6c6c6c;
        }

        .btn_brand1 {
            height: 40px;
            width: 100%;
            display: inline-block;
            background: none;
            border: #bdbdbd 1px solid;
            color: #ffffff;
        }

        .border::-webkit-scrollbar , #myDropdown::-webkit-scrollbar{
            width: 0;
        }

        .btn_price {
            height: 40px;
            width: 100%;
            display: inline-block;
            background: none;
            border: #bdbdbd 1px solid;
            color: #6c6c6c;
        }


    </style>
    <script src="{{url('https://unpkg.com/@popperjs/core@2')}}"></script>
@endsection
@section('main_content')
    <section class="products">
        <p style="position: fixed;left: 10px;top: 107px;z-index: 100000;width: 40px"
           class="btn btn-danger btn_show_filter">
            <i class="fas fa-filter d-nonee"></i>
            <i class="fas fa-chevron-left d-nonee2"></i>
        </p>

        <div
            style="background: white;max-height: 650px;width: 220px;position: fixed;left: 10px;top: 150px;overflow: scroll;z-index: 100000;box-shadow: black 1px 2px 3px"
            class="border filter_container d-nonee2 p-3">
            <div style="width: 100%">
                <button style="background: #fc5353" class="m-1 btn_brand1">Lọc theo hãng</button>
                <button slot="" class="m-1 btn_brand">Tất cả</button>
                @foreach($brands as $item)
                    <button slot="{{$item->name}}" class="m-1 btn_brand">{{$item->name}}</button>
                @endforeach
            </div>
            <a href="{{route('product')}}" style="text-decoration: none;display: block">
                <button slot=">20tr" class="m-1 btn_price">Loại bỏ các bộ lọc</button>
            </a>
        </div>


        <div class="container">
            <div class="" style="height: auto;margin-right: 0!important;">
                <div class="d-none">
                    <form action="" method="get" id="brand_filter">
                        <input type="text" name="brand_s" id="brand_s">
                        <input type="text" name="price_s" id="price_s">
                    </form>
                </div>
            </div>

            <div id="" class="product-area product-area-0">
                <h3 class="p-3 text-secondary">{{$brand_s ? 'Sản phẩm của '. $brand_s : 'Tất cả sản phẩm'}}</h3>

                <div class=" p-3">
                    <button onclick="myFunction()" class="dropbtn">Lọc theo mức giá</button>
                    <div id="myDropdown" class="dropdown-content pr-2" style="width: 230px">
                        <button slot="" class="m-1 btn_price">Mọi mức giá</button>
                        <button slot="t->c" class="m-1 btn_price">Giá gốc thấp đến cao</button>
                        <button slot="c->t" class="m-1 btn_price">Giá gốc cao đến thấp</button>
                        <button slot="<2tr" class="m-1 btn_price">Giá gốc dưới 2tr</button>
                        <button slot="2tr->5tr" class="m-1 btn_price">Giá gốc 2tr -> 5tr</button>
                        <button slot="5tr->10tr" class="m-1 btn_price">Giá gốc 5tr -> 10tr</button>
                        <button slot="10tr->15tr" class="m-1 btn_price">Giá gốc 10tr -> 15tr</button>
                        <button slot="15tr->20tr" class="m-1 btn_price">Giá gốc 15tr -> 20tr</button>
                        <button slot=">20tr" class="m-1 btn_price">Giá gốc Trên 20tr</button>
                    </div>
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
                                            <a href="{{route('product_detail',$item->slug)}}"><img src="{{$item->thumbnail}}"
                                                                                                   style="height: 100%;width: 100%;object-fit: cover"></a>
                                        </div>
                                        <h3 class="product-name"><a
                                                href="https://www.hnammobile.com/dien-thoai/samsung-galaxy-s21-ultra-5g-g998-256gb.21524.html">{{$item->name}}</a>
                                        </h3>
                                        <div class="product-price ">
                                            <b>{{number_format($item->price - $item->price * $item->discount/100 )}}
                                                vnđ</b><span><del>{{number_format($item->price)}} vnđ</del></span>
                                        </div>
                                    </div>
                                    <div class="product-bottom">
                                        <a slot="{{$item->id}}" rel="nofollow" class="btn buy-now" data-toggle="modal"
                                           data-target="#exampleModalLong">Đặt hàng ngay</a>
                                        <a rel="nofollow"
                                           href="{{route('product_detail',$item->slug)}}"
                                           class="btn pay-0">Xem chi tiết</a>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <div style="width: 100%">
                            <div style="float: right">{{$list->links()}}</div>
                        </div>
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
                                         style="height: 19px;display: {{$item->discount == 0 ? 'none' :''}}">
                                        Giảm {{$item->discount}} %
                                    </div>
                                </div>
                                <div class="product-mid">
                                    <div class="product-image">
                                        <a href="{{route('product_detail',$item->slug)}}"><img src="{{$item->thumbnail}}"
                                                                                               style="height: 100%;width: 100%;object-fit: cover"></a>
                                    </div>
                                    <h3 class="product-name"><a
                                            href="https://www.hnammobile.com/dien-thoai/samsung-galaxy-s21-ultra-5g-g998-256gb.21524.html">{{$item->name}}</a>
                                    </h3>
                                    <div class="product-price ">
                                        <b>{{number_format($item->price - $item->price * $item->discount/100)}}
                                            vnđ</b><span><del>{{number_format($item->price)}} vnđ</del></span>
                                    </div>
                                </div>
                                <div class="product-bottom">
                                    <a slot="{{$item->id}}" rel="nofollow" class="btn buy-now" data-toggle="modal"
                                       data-target="#exampleModalLong">Đặt hàng ngay</a>
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
                                        <a href="{{route('product_detail',$item->slug)}}"><img src="{{$item->thumbnail}}"
                                                        style="height: 100%;width: 100%;object-fit: cover"></a>
                                    </div>
                                    <h3 class="product-name"><a
                                            href="https://www.hnammobile.com/dien-thoai/samsung-galaxy-s21-ultra-5g-g998-256gb.21524.html">{{$item->name}}</a>
                                    </h3>
                                    <div class="product-price ">
                                        <b>{{number_format($item->price - $item->price * $item->discount/100)}}
                                            vnđ</b><span><del>{{number_format($item->price)}} vnđ</del></span>
                                    </div>
                                </div>
                                <div class="product-bottom">
                                    <a slot="{{$item->id}}" rel="nofollow" class="btn buy-now" data-toggle="modal"
                                       data-target="#exampleModalLong">Đặt hàng ngay</a>
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
        var check_filter = true
        $('.btn_show_filter').click(function () {
            $('.filter_container').toggleClass('d-nonee')
            $('.filter_container').toggleClass('d-nonee2')
            if (window.innerWidth < 992){
                if (check_filter) {
                    $('.btn_show_filter').html('<i class="fas fa-chevron-left"></i>')
                    check_filter = false
                } else {
                    $('.btn_show_filter').html('<i class="fas fa-filter"></i>')
                    check_filter = true
                }
            }else {
                if (check_filter) {
                    $('.btn_show_filter').html('<i class="fas fa-filter"></i>')
                    check_filter = false
                } else {
                    $('.btn_show_filter').html('<i class="fas fa-chevron-left"></i>')
                    check_filter = true
                }
            }

        })
        $('.btn_brand').click(function () {
            $('#brand_s').val(this.slot)
            $('#brand_filter').submit()
        })
        $('.btn_price').click(function () {
            $('#price_s').val(this.slot)
            $('#brand_filter').submit()
        })

        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }

    </script>

@endsection
