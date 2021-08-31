@section('title','Form color | Admin')
@extends('.admin.layouts.form')
@section('title_form','Create color')

@section('size_form')
    <div class="col-md-6">
        @endsection

        @section('input_form')
            <div class="row form-group">
                <div class="col-lg-12">
                    <label for="">Name</label>
                    <input type="text" name="name" placeholder="Enter Color Name" class="form-control">
                </div>
            </div>
            <br>
            <div class="row form-group">
                <div class="col-lg-12">
                    <label for="">Color Code</label>
                    <input type="color" name="color_code" placeholder="" class="form-control">
                </div>
            </div>
            <br>


@endsection

