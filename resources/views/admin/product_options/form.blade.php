@section('title','Form product option | Admin')
@extends('.admin.layouts.form')
@section('title_form','Edit product option')

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

    </style>
@endsection


@section('upload')
    <form id="form_image" action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image" class="image_file">
    </form>
@endsection


@section('size_form')
    <div class="col-md-10">
        @endsection
        @section('input_form')
            <div class="col-md-12 product_option_content">
                <div class="options">
                    <div class="option">
                        <hr>
                        <div class="row form-group">
                            <div class="col-lg-7">
                                <label for="Discount">Choose thumbnail</label>
                                <button type="button"
                                        class="btn btn-danger form-control Choose_thumbnail_option">Choose thumbnail
                                </button>
                            </div>
                            <div class="col-lg-5">
                                <img src="{{$detail->thumbnail}}" alt="" class="demo_option_thumbnail" id="0987987img">
                                <input type="hidden" name="thumbnail" id="thumbnail" value="{{$detail->thumbnail}}">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-lg-4">
                                <label>Quantity</label>
                                <input name="quantity" value="{{$detail->quantity}}" type="number"
                                       class="form-control quantity" min="0">
                            </div>
                            <div class="col-lg-4">
                                <label>Price</label>
                                <input name="price" value="{{$detail->price}}" type="number" class="form-control price">
                            </div>
                            <div class="col-lg-4">
                                <label for="">Color</label>
                                <select name="color_id" id="" class="form-control color">
                                    @foreach($color as $item)
                                        <option
                                            {{$item->id == $detail->color_id ?'selected' :''}} value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-4">
                                <label>Ram (GB)</label>
                                <input name="ram" value="{{$detail->ram}}" type="number" class="form-control ram">
                            </div>
                            <div class="col-lg-4">
                                <label>Rom (GB)</label>
                                <input name="rom" value="{{$detail->rom}}" type="number" class="form-control rom">
                            </div>
                        </div>
                    </div>
                    @endsection
                    @section('Extra_js')
                        <script>
                            $('#form_admin').validate({
                                rules: {
                                    thumbnail: {
                                        required: true
                                    },
                                    quantity: {
                                        required: true
                                    },
                                    price: {
                                        required: true
                                    },
                                    ram: {
                                        required: true
                                    },
                                    rom: {
                                        required: true
                                    }
                                },
                                messages: {
                                    thumbnail: {
                                        required: 'Thumbnail không được bỏ trốn',
                                    },
                                    quantity: {
                                        required: 'Quantity không đực bỏ trống',
                                    },
                                    price: {
                                        required: 'Gía không dược bỏ trống',
                                    },
                                    ram: {
                                        required: 'Ram không được bỏ trống',
                                    },
                                    rom: {
                                        required: 'Rom không đực bỏ trống',
                                    }
                                }
                            })
                        </script>
                        <script>
                            $('.Choose_thumbnail_option').click(function () {
                                $('.image_file').click()
                            })
                            $('.image_file').change(function () {
                                $('#form_image').submit()
                            })
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
                                        var protocol = window.location.protocol
                                        var host = window.location.hostname
                                        var port = window.location.port
                                        var url = protocol + '//' + host + ':' + port + '/images/admin_data/images/'
                                        var img = document.getElementById('0987987img')
                                        document.getElementById('thumbnail').value = `${url + res.data}`
                                        img.src = `${url + res.data}`
                                    }
                                })
                            })
                        </script>
@endsection

