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
            border: #f88989 2px solid !important;
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
                <div class="col-12 row p-4">
                    <h4 class="text-secondary col-12 pb-3">Sản phẩm liên quan</h4>
                    @foreach(\App\Models\Product::query()->where('brand_id',$detail->brand_id)->where('id','!=',$detail->id)->orderBy('id','DESC')->take(2)->get() as $item)
                        <div class="col-6" style="height: 420px;position: relative">
                            <p style="top: 15px;right: 15px;position: absolute;padding-left: 10px;border-radius: 3px;color: white;height: 22px;background: #ff5959;width: 100px;display: {{$item->discount == 0 ? 'none' :''}}">Giảm {{$item->discount}} %</p>
                            <div style="height: 100% ; width: 100%;justify-content: center;flex-wrap: wrap"
                                 class="border d-flex pt-1">
                                <img src="{{$item->thumbnail}}" alt="" style="width: 80%;height: 60%;object-fit: cover">
                                <h6 style="width: 80%">{{$item->name}}</h6>
                                <h6 style="font-size: 14px"><span style="color: red">{{number_format($item->price - $item->price * $item->discount/100) }} vnđ </span><span
                                        class="text-secondary" style="text-decoration:line-through">{{number_format($item->price)}}  vnđ</span>
                                </h6>
                                <a href="{{route('product_detail',$item->slug)}}" class="btn btn-danger" style="width: 80%;height: 40px">Xem chi tiết</a>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
            <div class="col row p-0" style="min-height: 1150px">
                <div class="col-12 pl-4" style="padding-right: 0">
                    <h3 class="text-secondary">{{$detail->name}}</h3>
                    <h5 class="text-secondary">Giá : <span
                            class="text-danger sale_price">{{number_format($detail->price - $detail->price * $detail->discount/100 )}} vnđ</span>
                        <span class="text-secondary price"
                              style="text-decoration: line-through;font-size: 18px;display: {{$detail->discount == 0 ? 'none' : ''}}">{{$detail->discount != 0 ? number_format($detail->price) . ' vnđ' : ''}}</span>
                    </h5>
                    <p class="text-secondary m-0"
                       style="font-size: 16px">{{$detail->discount != 0 ? 'Khuyến mãi : ' . $detail->discount . '%' : ''}}</p>

                    <p class="text-primary m-0" style="font-size: 16px">Ram : <span
                            class="show_ram">{{\App\Models\Product_option::query()->where('product_id',$detail->id)->first()->ram}}</span>GB
                    </p>

                    <p class="text-secondary m-0">options</p>
                    <div class="row col-12 p-0 m-0">

                        @for($i = 0 ; $i < sizeof($detail->product_option) ; $i++)
                            <div
                                slot="{{$detail->product_option[$i]->thumbnail}}~!!!~{{number_format($detail->price+$detail->product_option[$i]->price - ($detail->price+$detail->product_option[$i]->price) * $detail->discount/100 )}}~!!!~{{number_format($detail->price+$detail->product_option[$i]->price)}}~!!!~{{$detail->product_option[$i]->ram}}"
                                class="col-6 border p-1 choice_option" style="height: 80px;padding: 0;cursor: pointer">
                                <div style="height: 100%;width: 80px;float: left;padding-right: 5px">
                                    <img style=";object-fit: cover;height: 100%;width: 100%"
                                         src="{{$detail->product_option[$i]->thumbnail}}" alt="">
                                </div>
                                <div style="height: 100%;float: left">
                                    <span
                                        style="height: 25px;display:inline-block;transform: translateY(-6px);font-size: 14px;font-weight: bold">{{\App\Models\Color::find($detail->product_option[$i]->color_id)->name}} ({{$detail->product_option[$i]->rom}} GB)</span>
                                    <p style="height: 10px;margin: 0;transform: translateY(-6px)">Giá : <span
                                            class="text-danger">{{number_format($detail->price+$detail->product_option[$i]->price - ($detail->price+$detail->product_option[$i]->price) * $detail->discount/100)}} vnđ </span>
                                    </p>
                                    <p style="height: 10px;margin: 0;transform: translateY(8px);font-size: 13px">Giá gốc
                                        : <span
                                            class="text-secondary"
                                            style="text-decoration: line-through;font-size: 14px;display: {{$detail->discount == 0 ? 'none' : ''}}">{{number_format($detail->price+$detail->product_option[$i]->price)}} vnđ</span>
                                    </p>
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
        </div>
    </div>


@endsection

@section('custom_js')

    <script>
        $('.product_image').click(function () {
            $('.show_image').attr('src', this.src)
        })
        $('.choice_option').click(function () {
            $('.option_active').removeClass('option_active')
            this.classList.add('option_active')
            var image = this.slot.split('~!!!~')[0]
            var sale_price = this.slot.split('~!!!~')[1]
            var price = this.slot.split('~!!!~')[2]
            var ram = this.slot.split('~!!!~')[3]
            $('.show_image').attr('src', image)
            $('.sale_price').html(sale_price + ' vnđ')
            $('.price').html(price + ' vnđ')
            $('.show_ram').html(ram)
        })
    </script>
@endsection
