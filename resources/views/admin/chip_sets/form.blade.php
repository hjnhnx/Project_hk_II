@section('title','Form chip-set | Admin')
@extends('.admin.layouts.form')
@section('title_form','Create chip-set')

@section('size_form')
    <div class="col-md-12">
        @endsection

        @section('input_form')
            <form action="" method="post">
                <div class="row form-group">
                    <div class="col-lg-5">
                        <label for="">Name</label>
                        <input type="text" name="name" placeholder="please enter name" class="form-control">
                    </div>

                    <div class="mb-md hidden-lg hidden-xl"></div>

                    <div class="col-lg-1">
                        <label for="">Process</label>
                        <input type="number" name="process" placeholder="" class="form-control">
                    </div>

                    <div class="mb-md hidden-lg hidden-xl"></div>

                    <div class="col-lg-6">
                        <label for="">Manufacturer</label>
                        <input type="text" name="manufacturer" placeholder="please enter manufacturer" class="form-control">
                    </div>
                </div>
            </form>
@endsection
