@section('title','Form configuration | Admin')
@extends('.admin.layouts.form')
@section('title_form','Create configuration')

@section('size_form')
    <div class="col-md-6">
        @endsection

        @section('input_form')
            <div class="row form-group">
                <div class="col-lg-12">
                    <label for="">RAM</label>
                    <input min="1" type="number" name="ram" placeholder="Enter Ram" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-12">
                    <label for="">ROM</label>
                    <input max="16" type="number" name="storage" placeholder="Enter storage" class="form-control">
                </div>
            </div>
@endsection
