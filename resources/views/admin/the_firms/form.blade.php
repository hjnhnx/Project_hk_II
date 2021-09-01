@section('title','Form the firm | Admin')
@extends('.admin.layouts.form')
@section('title_form','Create The firm')

@section('size_form')
    <div class="col-md-6">
@endsection

@section('input_form')
            <div class="row form-group">
                <div class="col-lg-12">
                    <label for="">Name</label>
                    <input type="text" name="name" placeholder="Enter the firm Name" class="form-control">
                </div>
            </div>
@endsection



@section('Extra_js')
            <script>
                $('#form_admin').validate({
                    rules: {
                        name:{
                            required:true,
                            minlength:2,
                        }
                    },
                    messages:{
                        name:{
                            required:'Vui lòng nhập vào trường này',
                            minlength:'Vui lòng nhập tên cụ thể',
                        }
                    }
                })
            </script>
@endsection
