@section('title','Form product | Admin')
@extends('.admin.layouts.form')
@section('title_form','Create product')
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
            border: #9d9d9d 1px solid;
            outline: none;
            object-fit: cover;
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
                    <input type="text" name="name" placeholder="Enter product name" class="form-control">
                </div>
                <div class="col-lg-6">
                    <label for="">Category</label>
                    <select name="category_id" id="" class="form-control">
                        @foreach($categories as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-6">
                    <label for="Discount">Discount</label>
                    <input type="number" min="1" name="discount" placeholder="Enter discount ( % )"
                           class="form-control">
                </div>
                <div class="col-lg-6">
                    <label for="">The firm</label>
                    <select name="the_firm_id" id="" class="form-control">
                        @foreach($the_firms as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-12">
                    <label>Description</label>
                    <textarea class="summernote" data-plugin-summernote
                              data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'
                              placeholder="hello"></textarea>
                </div>
            </div>
        @endsection

        @section('add_form')
            <div class="col-md-12 product_option_content">
                <div class="options">
                    <div class="option">
                        <hr>
                        <div class="row form-group">
                            <div class="col-lg-7">
                                <label for="Discount">Choose thumbnail</label>
                                <button type="button" onclick="upload_image_option('0987987')" class="btn btn-danger form-control Choose_thumbnail_option">Choose thumbnail</button>
                            </div>
                            <div class="col-lg-5">
                                <img alt="" class="demo_option_thumbnail" id="0987987img">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="Discount">Quantity</label>
                                <input type="number" class="form-control" name="quantity" value="0" min="0">
                            </div>
                            <div class="col-lg-6">
                                <label for="">Configuration</label>
                                <select name="configuration_id" id="" class="form-control">
                                    @foreach($configuration as $item)
                                        <option value="{{$item->id}}">{{$item->ram}} GB/Ram : {{$item->storage}}
                                            GB/ROM
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label for="Discount">Price</label>
                                <input type="number" class="form-control" name="quantity" value="0" min="1">
                            </div>
                            <div class="col-lg-6">
                                <label for="">Color</label>
                                <select name="the_firm_id" id="" class="form-control">
                                    @foreach($colors as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <button type="button" class="btn btn-info btn_create_new_option">New option +</button>
            </div>
        @endsection

        @section('Extra_js')
            <script>
                document.addEventListener('DOMContentLoaded',function (){
                    $('.btn_create_new_option').click(function (){
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
                            <div class="col-lg-6">
                                <label for="Discount">Quantity</label>
                                <input type="number" class="form-control" name="quantity" value="0" min="0">
                            </div>
                            <div class="col-lg-6">
                                <label for="">Configuration</label>
                                <select name="configuration_id" id="" class="form-control">
                                    @foreach($configuration as $item)
                        <option value="{{$item->id}}">{{$item->ram}} GB/Ram : {{$item->storage}}
                        GB/ROM
                    </option>
@endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-6">
                        <label for="Discount">Price</label>
                        <input type="number" class="form-control" name="quantity" value="0" min="1">
                    </div>
                    <div class="col-lg-6">
                        <label for="">Color</label>
                        <select name="the_firm_id" id="" class="form-control">
@foreach($colors as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                        </select>
                    </div>
                </div>
            </div>
`)
                    })
                })
                var img_code

                function upload_image_option(code){
                    img_code = code
                    $('.image_file').click()
                    $('.image_file').change(function (){
                        $('#form_image').submit()
                    })

                }

                $('#form_image').on('submit',function (event){
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
                            var img = document.getElementById(img_code+'img')
                            console.log(img)
                            img.src = `http://localhost:8000/images/admin_data/images/${res.data}`
                        }
                    })
                })



                function close_option(id){
                    document.getElementById(id).remove()
                }
            </script>
@endsection
