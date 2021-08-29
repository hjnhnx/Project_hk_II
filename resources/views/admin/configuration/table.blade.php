@section('title','List Configuration | Admin')
@extends('.admin.layouts.table')
@section('custom_style_level_2')
        .show_avatar {
            height: 50px;
            width: 50px;
            object-fit: cover;
            border-radius: 5px;
        }
@endsection
@section('filter_form')
    <div class="form-group col-sm-5">
        <input value="{{$key_search != null ? $key_search : ''}}" type="text" class="form-control" placeholder="Enter keyword" name="search">
    </div>
    <div class="form-group col-sm-4">
        <button class="btn btn-primary">Search</button>
        <button class="btn btn-danger">Clear filter</button>
    </div>
    <div class="form-group col-sm-3">
        <select name="sort" id="" class="form-control sorted">
            <option {{$sort ==  \App\Enums\Sort::SORT_ID_ASC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_ID_ASC}}">ID tăng dần</option>
            <option {{$sort ==  \App\Enums\Sort::SORT_ID_DESC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_ID_DESC}}">ID giảm dần</option>
            <option {{$sort ==  \App\Enums\Sort::SORT_VALUE_ASC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_VALUE_ASC}}">STORAGE tăng dần </option>
            <option {{$sort ==  \App\Enums\Sort::SORT_VALUE_DESC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_VALUE_DESC}}">STORAGE giảm dần</option>

            <option {{$sort ==  \App\Enums\Sort::SORT_VALUER_ASC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_VALUER_ASC}}">RAM tăng dần </option>
            <option {{$sort ==  \App\Enums\Sort::SORT_VALUER_DESC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_VALUER_DESC}}">RAM giảm dần</option>

            <option {{$sort ==  \App\Enums\Sort::SORT_CREATED_AT_DESC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_CREATED_AT_DESC}}">Mới nhất trước</option>
            <option {{$sort ==  \App\Enums\Sort::SORT_CREATED_AT_ASC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_CREATED_AT_ASC}}">Cũ nhất trước</option>


        </select>
    </div>
@endsection
@section('table_head')
    <tr>
        <th>Id</th>
        <th>RAM</th>
        <th>STORAGE</th>
        <th>Created at</th>
        <th class="text-center">Actions</th>
    </tr>
@endsection
@section('table_body')
    @foreach($list as $item)
        <tr class="gradeX">
            <td>{{$item->id}}</td>
            <td>{{$item->ram}} / GB</td>
            <td>{{$item->storage}} / GB</td>
            <td>{{$item->created_at}}</td>
            <td class="actions text-center">
                <a href="#" class="on-default edit-row text-primary"><i class="fa fa-pencil"></i></a>
                <a href="#" class="on-default remove-row text-danger"><i class="fa fa-trash-o"></i></a>
                <a href="#" class="on-default remove-row text-dark"><i class="fa fa-info-circle"></i></a>
            </td>
        </tr>
    @endforeach
@endsection
