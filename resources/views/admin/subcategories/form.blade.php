@section('title','Form subcategories | Admin')
@extends('.admin.layouts.form')
@section('title_form','Create subcategories')

@section('size_form')
    <div class="col-md-6">
        @endsection

        @section('input_form')
            <div class="row form-group">
                <div class="col-lg-6">
                    <label for="">Name</label>
                    <input type="text" name="name" placeholder="Enter Name" class="form-control">
                </div>
                <div class="mb-md hidden-lg hidden-xl"></div>
                <div class="col-lg-6">
                    <label for="">Category_id</label>
                    <select class="form-control" name="category_id">
                        @foreach($categories as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
@endsection

