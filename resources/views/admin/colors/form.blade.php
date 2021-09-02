@section('title','Form color | Admin')
@extends('.admin.layouts.form')
@section('title_form', $detail ?'Edit color' :'Create color')

@section('size_form')
    <div class="col-md-6">
        @endsection
        @section('input_form')
            <div class="row form-group">
                <div class="col-lg-12">
                    <label for="">Name</label>
                    <input value="{{$detail ? $detail->name : ''}}" type="text" name="name" placeholder="Enter Color Name" class="form-control">
                    @error('name')
                    <span style="color: #f97d7d;font-size: 12px;font-weight: bold">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row form-group">
                <div class="col-lg-12">
                    <label for="">Color Code</label>
                    <input value="{{$detail ?$detail->color_code :''}}" type="color" name="color_code" placeholder="" class="form-control">
                </div>
            </div>
            <br>
        @endsection
{{--        @section('Extra_js')--}}
{{--            <script>--}}
{{--                $('#form_admin').validate({--}}
{{--                    rules: {--}}
{{--                        name: {--}}
{{--                            required: true,--}}
{{--                        },--}}
{{--                    },--}}
{{--                    messages: {--}}
{{--                        name: {--}}
{{--                            required: 'Vui lòng nhập vào trường này',--}}
{{--                        },--}}
{{--                    }--}}
{{--                })--}}
{{--            </script>--}}
{{--@endsection--}}

