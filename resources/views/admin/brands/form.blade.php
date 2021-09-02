@section('title','Form Brand | Admin')
@extends('.admin.layouts.form')
@section('title_form',$detail ?'Edit Brand' :'Create Brand')

@section('size_form')
    <div class="col-md-6">
@endsection

@section('input_form')
            <div class="row form-group">
                <div class="col-lg-12">
                    <label for="">Name</label>
                    <input value="{{$detail ?$detail->name :''}}" type="text" name="name" placeholder="Enter Brand Name" class="form-control">
                    @error('name')
                    <span style="color: #f97d7d;font-size: 12px;font-weight: bold">{{ $message }}</span>
                    @enderror
                </div>
            </div>
@endsection

{{--@section('Extra_js')--}}
{{--            <script>--}}
{{--                $('#form_admin').validate({--}}
{{--                    rules: {--}}
{{--                        name:{--}}
{{--                            required:true,--}}
{{--                            minlength:2,--}}
{{--                        }--}}
{{--                    },--}}
{{--                    messages:{--}}
{{--                        name:{--}}
{{--                            required:'Vui lòng nhập vào trường này',--}}
{{--                            minlength:'Vui lòng nhập tên cụ thể',--}}
{{--                        }--}}
{{--                    }--}}
{{--                })--}}
{{--            </script>--}}
{{--@endsection--}}
