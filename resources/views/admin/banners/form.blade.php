@section('title','Form Banner | Admin')
@extends('.admin.layouts.form')
@section('title_form',$detail ?'Edit banner' :'Create banner')

@section('upload')
    <form id="form_image" action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image" class="image_file">
    </form>
@endsection


@section('size_form')
    <div class="col-md-10">
        @endsection
        @section('input_form')
            <div class="row form-group">

                <div class="col-lg-5">
                    <label for="">Link to product</label>
                    <input value="{{$detail ?$detail->link_to_product :''}}" type="text" name="link_to_product" placeholder="Link to product" class="form-control">
                    @error('link_to_product')
                    <span style="color: #f97d7d;font-size: 12px;font-weight: bold">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-lg-2">
                    <label for="">Type</label>
                    <select name="type" id="" class="form-control">
                        <option value="{{\App\Enums\BannerType::BANNER}}">Banner</option>
                        <option value="{{\App\Enums\BannerType::SUBBANNER}}">Sub Banner</option>
                    </select>
                </div>
                <div class="col-lg-5">
                    <label for="">Video</label>
                    <input value="{{$detail ?$detail->video :''}}" type="text" id="video_clone" placeholder="Enter video url" class="form-control">
                    <input value="{{$detail ?$detail->video :''}}" type="hidden" id="video" name="video" placeholder="Enter video url" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-lg-5">
                    <label for="">Image</label>
                    <button type="button" class="form-control btn btn-danger choose_image">Choose Image banner</button>
                    <input value="{{$detail ?$detail->image :''}}" type="hidden" name="image" id="image" placeholder="Enter src image" >
                    @error('image')
                    <span style="color: #f97d7d;font-size: 12px;font-weight: bold">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-lg-7">
                    <label for="">Content</label>
                    <input value="{{$detail ?$detail->content :''}}" type="text" name="content" placeholder="Enter content banner" class="form-control" >
                    @error('content')
                    <span style="color: #f97d7d;font-size: 12px;font-weight: bold">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-12">
                    @if($detail)
                        <img id="bn0987" style="width: 100%;height: 400px;object-fit: cover" src="{{$detail->image}}" alt="">
                    @else
                        <img id="bn0987" style="width: 100%;height: 400px;object-fit: cover;display: none" src="" alt="">
                    @endif
                </div>
            </div>
            <br>
@endsection

        @section('Extra_js')
            <script>
                $('#form_admin').validate({
                    rules: {
                        link_to_product:{
                            required:true,
                        },
                    },
                    messages:{
                        link_to_product:{
                            required:'Vui lòng nhập link sản phẩm.',
                        },
                    }
                })
                document.addEventListener('DOMContentLoaded',function (){
                    $('#video_clone').blur(function (){
                        var video = $('#video_clone').val()
                        var code =  'https://www.youtube.com/embed/'+video.split('/')[3]
                        $('#video').val(code)
                    })
                    $('.choose_image').click(function (){
                        $('.image_file').click()
                    })
                    $('.image_file').change(function (){
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
                                var img = document.getElementById('bn0987')
                                img.style.display = 'block'
                                document.getElementById('image').value = `${url + res.data}`
                                img.src = `${url + res.data}`
                            }
                        })
                    })
                })
            </script>
@endsection

