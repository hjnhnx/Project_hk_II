@extends('client.layouts.master')
@section('custom_style')
    <style>
        .images::-webkit-scrollbar {
            width: 0;
        }

        .product_image {
            cursor: pointer;
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
                <div class="col-10 p-4" style="height: 100%">
                    <img class="show_image" src="{{$detail->thumbnail}}" alt=""
                         style="height: 100%;width: 100%;object-fit: cover">
                </div>
            </div>
            <div class="col row p-0">
                <div class="col-12 pl-4" style="padding-right: 0">
                    <h3 class="text-secondary">{{$detail->name}}</h3>
                    <h5 class="text-secondary">Giá : <span
                            class="text-danger">$ {{$detail->price - $detail->price * $detail->discount/100 }}</span>
                        <span class="text-secondary"
                              style="text-decoration: line-through;font-size: 18px">$ {{$detail->price}}</span></h5>
                    <p class="text-secondary m-0"
                       style="font-size: 16px">{{$detail->discount != 0 ? 'Khuyến mãi : ' . $detail->discount . '%' : ''}}</p>
                    <p class="text-secondary m-0">options</p>
                    <div class="row col-12 p-0 m-0">

                        @for($i = 0 ; $i < sizeof($detail->product_option) ; $i++)
                            <div class="col-6 border p-1" style="height: 80px;padding: 0;cursor: pointer">
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
                                            style="text-decoration: line-through;font-size: 14px">$ {{$detail->price+$detail->product_option[$i]->price}}</span>
                                    </p>
                                    <p style="height: 10px;margin: 0;transform: translateY(8px);font-size: 13px">{{$detail->product_option[$i]->ram}}
                                        Gb/ram-{{$detail->product_option[$i]->rom}}Gb/rom</p>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="col-12" style="height: 120px">

            </div>
        </div>
    </div>
@endsection

@section('custom_js')

    <script>
        $('.product_image').click(function () {
            $('.show_image').attr('src', this.src)
        })
    </script>
@endsection
