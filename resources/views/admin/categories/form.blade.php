@section('title','Form user | Admin')
@extends('.admin.layouts.form')
@section('title_form', $detail ?'Edit category' :'Create category')

@section('size_form')
    <div class="col-md-6">
        @endsection

        @section('input_form')
            <div class="row form-group">
                <div class="col-lg-12">
                    <label for="">Name</label>
                    <input value="{{$detail ?$detail->name :''}}" type="text" name="name" placeholder="Enter Category Name" class="form-control">
                </div>
            </div>
@endsection
        @section('Extra_js')
            <script>
                $('#form_admin').validate({
                    rules: {
                        name:{
                            required: true
                        }
                    },
                    messages:{
                        name: {
                            required:'Nhập tên danh mục'
                        }
                    }
                })
            </script>
@endsection
