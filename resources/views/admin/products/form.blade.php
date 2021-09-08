@section('title','Form product | Admin')
@extends('.admin.layouts.form')
@section('title_form',$detail ? 'Edit product' :'Create product')
@section('custom_style_level_2')
    <style>
        .product_option_content {
            padding: 0 !important;
        }

        .btn_create_new_option {
            display: block;
            margin: auto;
        }

        .btn_close {
            font-size: 30px;
            cursor: pointer;
            float: right;
            color: #ff6060;
            transition: 0.3s;
        }

        .demo_option_thumbnail {
            height: 100px;
            width: 100px;
            outline: none;
            object-fit: cover;
        }

        .btn_submit {
            display: none;
        }
    </style>
@endsection

@section('upload')
    <form id="form_images" method="post" enctype="multipart/form-data">
        <input type="file" multiple name="files[]" class="image_files">
        <button>submit</button>
    </form>
    <form id="form_image" action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image" class="image_file">
    </form>
@endsection

@section('size_form')
    <div class="col-md-9">
        @endsection
        @section('input_form')
            <div class="row form-group">
                <div class="col-lg-6">
                    <label for="">Product name</label>
                    <input value="{{$detail ?$detail->name :''}}" type="text" name="name" placeholder="Enter product name" class="form-control product_name">
                </div>
                <div class="col-lg-6">
                    <label for="">Category</label>
                    <select name="category_id" id="" class="form-control">
                        @foreach($categories as $item)
                            <option {{$detail && $detail->category_id == $item->id ?'selected' :''}} value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-6">
                    <label for="Discount">Discount</label>
                    <input  type="number" min="0" name="discount" placeholder="Enter discount ( % )"
                            class="form-control" value="{{$detail ?$detail->discount :0}}">
                </div>
                <div class="col-lg-6">
                    <label for="">Brand</label>
                    <select name="brand_id" id="" class="form-control">
                        @foreach($brands as $item)
                            <option {{$detail && $detail->brand_id == $item->id ?'selected' :''}} value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-6">
                    <label >Choose images</label>
                    <button type="button" class="btn btn-danger form-control btn_choose_images">Choose images +</button>
                </div>
                <div class="col-lg-6">
                    <label >Price</label>
                    <input value="{{$detail ? $detail->price : ''}}" name="price" type="text" placeholder="Vui lòng nhập giá co sản phẩm này" class="form-control">
                </div>
                <br>
                <div class="col-lg-12 row show_images_product" style="margin-top: 30px">
                    @if($detail)
                        @for($i=0;$i<sizeof(json_decode($detail->images,true));$i++)
                            <div id="image{{$i}}" class="col-md-3" style="height: 200px;overflow: hidden;margin-bottom: 10px">
                                <img class="product_image" style="width: 100%;height: 160px;object-fit: cover;border-radius: 5px;margin-bottom: 2px" src="{{json_decode($detail->images,true)[$i]}}" alt="">
                                <button type="button" slot="image{{$i}}" onclick="delete_image(this.slot)" class="btn btn-info form-control">Close</button>
                            </div>
                        @endfor
                    @endif
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-12">
                    <label>Description</label>
                    <textarea style="height: 100px" name="description" type="text" placeholder="Enter description" class="form-control">{{$detail ?$detail->description :''}}</textarea>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-12">
                    <label>Content detail</label>
                    <textarea name="content_detail" class="summernote" data-plugin-summernote
                              data-plugin-options='{ "height": 330, "codemirror": { "theme": "ambiance" } }'
                              placeholder="hello">
                        {{$detail ?$detail->content_detail :'<p><span style="color: rgb(0, 0, 0); font-family: Arial; font-size: 14px; font-weight: 700;">Màn hình:</span><span style="color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;">6.8 inches, Full HD+ (1080 x 2400 pixels, 20:9 ratio), 165Hz</span><br></p><p><span style="color: rgb(0, 0, 0); font-family: Arial; font-size: 14px; font-weight: 700;">Hệ điều hành:</span><span style="color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;">Android 11, Redmagic 4.0</span><span style="color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;"><br></span></p><p><span style="color: rgb(0, 0, 0); font-family: Arial; font-size: 14px; font-weight: 700;">Camera sau:</span><span style="color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;">64 MP, f/1.8 (wide), 8 MP, f/2.0 (ultrawide), 2 MP (macro)</span><span style="color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;"><br></span></p><p><span style="color: rgb(0, 0, 0); font-family: Arial; font-size: 14px; font-weight: 700;">Camera trước:</span><span style="color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;">8 MP, f/2.0 (wide)</span><span style="color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;"><br></span></p><p><span style="color: rgb(0, 0, 0); font-family: Arial; font-size: 14px; font-weight: 700;">CPU:</span><span style="color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;">Qualcomm Snapdragon 888 (5 nm)</span><span style="color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;"><br></span></p><p><span style="color: rgb(0, 0, 0); font-family: Arial; font-size: 14px; font-weight: 700;">RAM:</span><span style="color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;">8-12GB</span><span style="color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;"><br></span></p><p><span style="color: rgb(0, 0, 0); font-family: Arial; font-size: 14px; font-weight: 700;">Bộ nhớ trong:</span><span style="color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;">128-256GB</span><br></p><p><span style="color: rgb(0, 0, 0); font-family: Arial; font-size: 14px; font-weight: 700;">Thẻ SIM:</span><span style="color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;">2 SIM</span><span style="color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;"><br></span></p><p><span style="color: rgb(0, 0, 0); font-family: Arial; font-size: 14px; font-weight: 700;">Dung lượng pin:</span><span style="color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;">5050 mAh - Sạc nhanh 66W</span><span style="color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;"><br></span></p><p><span style="color: rgb(0, 0, 0); font-family: Arial; font-size: 14px; font-weight: 700;">Thiết kế:</span><span style="color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;">Thiết kế 2 mặt kính, khung nhôm</span><span style="color: rgb(0, 0, 0); font-family: Arial; font-size: 14px;"><br></span></p>'}}
                    </textarea>
                </div>
            </div>

            <div style="display: none">
                <input type="text" name="thumbnail" id="thumbnail">
                <input type="text" name="images" id="images">
                <input type="text" name="slug" id="slug"><br><br>
                {{--                option field--}}
                <input type="text" name="sm_option_images" id="sm_option_images">
                <input type="text" name="sm_option_quantity" id="sm_option_quantity">
                <input type="text" name="sm_option_price" id="sm_option_price">
                <input type="text" name="sm_option_color" id="sm_option_color">
                <input type="text" name="sm_option_ram" id="sm_option_ram">
                <input type="text" name="sm_option_rom" id="sm_option_rom">

            </div>
        @endsection

        @section('add_form')
            <div class="col-md-12 product_option_content">
                <h2>Options</h2>
                <div class="options">
                    @if($detail)
                        @foreach($detail->product_option as $key => $item)
                            @if($key == 0)
                                <div class="option">
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col-lg-7">
                                            <label for="Discount">Choose thumbnail</label>
                                            <button type="button" onclick="upload_image_option('0987987')"
                                                    class="btn btn-danger form-control Choose_thumbnail_option">Choose thumbnail
                                            </button>
                                        </div>
                                        <div class="col-lg-5">
                                            <img src="{{$item->thumbnail}}" alt="" class="demo_option_thumbnail" id="0987987img">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-lg-4">
                                            <label>Quantity</label>
                                            <input type="number" class="form-control quantity" value="{{$item->quantity}}" min="0">
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Additional price</label>
                                            <input type="number" class="form-control price" value="{{$item->price}}">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="">Color</label>
                                            <select name="" id="" class="form-control color">
                                                @foreach($colors as $items)
                                                    <option {{$item->color_id == $items->id ? 'selected' : ''}} value="{{$items->id}}">{{$items->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-lg-4">
                                            <label>Ram (GB)</label>
                                            <input type="number" class="form-control ram" value="{{$item->ram}}" min="2">
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Rom (GB)</label>
                                            <input type="number" class="form-control rom" value="{{$item->rom}}" min="16">
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="option" id="close{{$key}}">
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col-lg-7">
                                            <label for="Discount">Choose thumbnail</label>
                                            <button type="button" onclick="upload_image_option('upload_image_id_{{$key}}')"
                                                    class="btn btn-danger form-control Choose_thumbnail_option">Choose thumbnail
                                            </button>
                                        </div>
                                        <div class="col-lg-5">
                                            <img src="{{$item->thumbnail}}" alt="" class="demo_option_thumbnail" id="upload_image_id_{{$key}}img">
                                            <span onclick="close_option('close{{$key}}')" class="btn_close" title="close this option">&times;</span>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-lg-4">
                                            <label>Quantity</label>
                                            <input type="number" class="form-control quantity" value="{{$item->quantity}}" min="0">
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Additional price</label>
                                            <input type="number" class="form-control price" value="{{$item->price}}">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="">Color</label>
                                            <select name="" id="" class="form-control color">
                                                @foreach($colors as $items)
                                                    <option {{$item->color_id == $items->id ? 'selected' : ''}} value="{{$items->id}}">{{$items->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-lg-4">
                                            <label>Ram (GB)</label>
                                            <input type="number" class="form-control ram" value="{{$item->ram}}" min="2">
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Rom (GB)</label>
                                            <input type="number" class="form-control rom" value="{{$item->rom}}" min="16">
                                        </div>
                                    </div>
                                </div>
                            @endif

                        @endforeach
                    @else
                        <div class="option">
                            <hr>
                            <div class="row form-group">
                                <div class="col-lg-7">
                                    <label for="Discount">Choose thumbnail</label>
                                    <button type="button" onclick="upload_image_option('0987987')"
                                            class="btn btn-danger form-control Choose_thumbnail_option">Choose thumbnail
                                    </button>
                                </div>
                                <div class="col-lg-5">
                                    <img alt="" class="demo_option_thumbnail" id="0987987img">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-lg-4">
                                    <label>Quantity</label>
                                    <input type="number" class="form-control quantity" value="0" min="0">
                                </div>
                                <div class="col-lg-4">
                                    <label>Additional price</label>
                                    <input type="number" class="form-control price" value="0">
                                </div>
                                <div class="col-lg-4">
                                    <label for="">Color</label>
                                    <select name="" id="" class="form-control color">
                                        @foreach($colors as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-4">
                                    <label>Ram (GB)</label>
                                    <input type="number" class="form-control ram" value="2" min="2">
                                </div>
                                <div class="col-lg-4">
                                    <label>Rom (GB)</label>
                                    <input type="number" class="form-control rom" value="16" min="16">
                                </div>
                            </div>

                        </div>
                    @endif

                </div>
                <hr>
                <button type="button" class="btn btn-info btn_create_new_option">New option +</button>
            </div>
        @endsection

        @section('Extra_btn')
            <button style="width: 120px" class="btn btn-primary btn_check_and_create_data" type="button">Submit</button>
        @endsection

        @section('Extra_js')
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    $('.btn_create_new_option').click(function () {
                        var id = Math.random()
                        $('.options').append(`
                    <div class="option" id="${id}">
                        <hr>
                        <div class="row form-group">
                            <div class="col-lg-7">
                                <label for="Discount">Choose thumbnail</label>
                                <button type="button" onclick="upload_image_option(${id})" slot="${id}" class="btn btn-danger form-control Choose_thumbnail_option">Choose thumbnail</button>
                            </div>
                            <div class="col-lg-5">
                                <img alt="" class="demo_option_thumbnail" id="${id}img">
                                <span onclick="close_option(${id})" class="btn_close" title="close this option">&times;</span>
                            </div>
                        </div>

                        <div class="row form-group">
                           <div class="col-lg-4">
                                <label >Quantity</label>
                                <input type="number" class="form-control quantity" value="0" min="0">
                            </div>
                            <div class="col-lg-4">
                                <label >Additional price</label>
                                <input type="number" class="form-control price" value="0">
                            </div>
                            <div class="col-lg-4">
                                <label for="">Color</label>
                                <select name="" id="" class="form-control color">
                                    @foreach($colors as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                        </select>
                    </div>
        </div>
        <div class="row form-group">
                            <div class="col-lg-4">
                                <label >Ram (GB)</label>
                                <input type="number" class="form-control ram" value="2" min="2">
                            </div>
                            <div class="col-lg-4">
                                <label >Rom (GB)</label>
                                <input type="number" class="form-control rom" value="16" min="16">
                            </div>
                        </div>

    </div>
`)
                    })
                    $('.btn_choose_images').click(function () {
                        $('.image_files').click()
                    })
                    $('.image_files').change(function () {
                        $('#form_images').submit()
                    })
                    $('#form_images').on('submit', function (event) {
                        event.preventDefault()
                        $.ajax({
                            url: "{{route('upload_images')}}",
                            method: "POST",
                            data: new FormData(this),
                            dataType: "JSON",
                            contentType: false,
                            cache: false,
                            processData: false,
                            success: function (res) {
                                for (let i = 0; i < res.data.length; i++) {
                                    var id = Math.random()
                                    $('.show_images_product').append(`<div id="${id}" class="col-md-3" style="height: 200px;overflow: hidden;margin-bottom: 10px">
                        <img class="product_image" style="width: 100%;height: 160px;object-fit: cover;border-radius: 5px;margin-bottom: 2px" src="${res.data[i].url}" alt="">
                        <button type="button" slot="${id}" onclick="delete_image(this.slot)" class="btn btn-info form-control">Close</button>
                    </div>`)
                                }
                            }
                        })
                    })
                    $('.btn_check_and_create_data').click(function () {
                        var product_images = document.querySelectorAll('.product_image')
                        var demo_option_thumbnails = document.querySelectorAll('.demo_option_thumbnail')
                        var demo_option_quantity = document.querySelectorAll('.quantity')
                        var demo_option_color = document.querySelectorAll('.color')
                        var demo_option_price = document.querySelectorAll('.price')
                        var demo_option_ram = document.querySelectorAll('.ram')
                        var demo_option_rom = document.querySelectorAll('.rom')
                        var data_images = []

                        var data_option_images = []
                        var option_quanties = []
                        var option_prices = []
                        var option_colors = []
                        var option_rams = []
                        var option_roms = []
                        for (let i = 0; i < product_images.length; i++) {
                            data_images.push(product_images[i].src)
                        }
                        for (let i = 0; i < demo_option_thumbnails.length; i++) {
                            if (demo_option_thumbnails[i].src !== "") {
                                data_option_images.push(demo_option_thumbnails[i].src)
                                option_quanties.push(demo_option_quantity[i].value)
                                option_prices.push(demo_option_price[i].value)
                                option_colors.push(demo_option_color[i].value)
                                option_rams.push(demo_option_ram[i].value)
                                option_roms.push(demo_option_rom[i].value)
                            }
                        }
                        var slug = document.querySelector('.product_name').value
                        $('#thumbnail').val(product_images[0].src)
                        $('#images').val(JSON.stringify(data_images))
                        $('#slug').val(slug.replaceAll(' ','-'))


                        $('#sm_option_images').val(JSON.stringify(data_option_images))
                        $('#sm_option_quantity').val(JSON.stringify(option_quanties))
                        $('#sm_option_price').val(JSON.stringify(option_prices))
                        $('#sm_option_color').val(JSON.stringify(option_colors))
                        $('#sm_option_ram').val(JSON.stringify(option_rams))
                        $('#sm_option_rom').val(JSON.stringify(option_roms))
                        $('.btn_submit').click()
                    })
                })
                function delete_image(id) {
                    document.getElementById(id).remove()
                }

                var img_code

                function upload_image_option(code) {
                    img_code = code
                    $('.image_file').click()
                    $('.image_file').change(function () {
                        $('#form_image').submit()
                    })
                }

                $('#form_image').on('submit', function (event) {
                    event.preventDefault()
                    $.ajax({
                        url: "{{route('upload_image')}}",
                        method: "POST",
                        data: new FormData(this),
                        dataType: "JSON",
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function (res) {
                            var img = document.getElementById(img_code + 'img')
                            img.src = `${res.data.url}`
                        }
                    })
                })

                function close_option(id) {
                    document.getElementById(id).remove()
                }
            </script>
@endsection
