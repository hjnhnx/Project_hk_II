@section('title','Form user | Admin')
@extends('.admin.layouts.form')
@section('title_form','Create user')

@section('size_form')
    <div class="col-md-12">
        @endsection

        @section('input_form')
            <div class="row form-group">
                <div class="col-lg-6">
                    <label for="">Image</label>
                    <input type="text" name="image" placeholder="Enter src image" class="form-control">
                </div>

                <div class="mb-md hidden-lg hidden-xl"></div>

                <div class="col-lg-6">
                    <label for="">Video</label>
                    <input type="text" name="video" placeholder="Enter video" class="form-control">
                </div>

                <div class="mb-md hidden-lg hidden-xl"></div>

            </div>

            <div class="row form-group">
                <div class="col-lg-12">
                    <label for="">Link to product</label>
                    <input type="text" name="link_to_product" placeholder="Link to product" class="form-control">
                </div>
            </div>
            <br>

@endsection

{{--        @section('Extra_js')--}}
{{--            <script>--}}
{{--                $('#form_admin').validate({--}}
{{--                    rules: {--}}
{{--                        image:{--}}
{{--                            required:true,--}}
{{--                            url:true,--}}
{{--                        },--}}
{{--                        link_to_product:{--}}
{{--                            required:true,--}}
{{--                            url:true,--}}
{{--                        },--}}
{{--                    },--}}
{{--                    messages:{--}}
{{--                        image:{--}}
{{--                            required:'Vui lòng chọn ảnh.',--}}
{{--                            url:'Vui lòng chọn đúng định dạng ảnh',--}}
{{--                        },--}}
{{--                        link_to_product:{--}}
{{--                            required:'Vui lòng nhập link sản phẩm.',--}}
{{--                            url:'Vui lòng chọn đúng đường dẫn tới sản phẩm.',--}}
{{--                        },--}}
{{--                    }--}}
{{--                })--}}
{{--            </script>--}}
{{--@endsection--}}

