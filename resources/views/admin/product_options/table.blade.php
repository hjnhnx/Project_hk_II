@section('title','List Product Option | Admin')
@extends('.admin.layouts.table')
@section('custom_style_level_2')
    .Product_Action{
    min-width:120px;
    }
    .view_color {
    height: 30px;
    width: 80%;
    border-radius: 3px;
    border: #929292 1px solid;
    }
@endsection
@section('filter_form')
    <div class="form-group col-sm-5">
        {{--        <input value="{{$key_search != null ? $key_search : ''}}" type="text" class="form-control" placeholder="Enter keyword" name="search">--}}
    </div>
    <div class="form-group col-sm-4">
        <button class="btn btn-primary">Search</button>
        <button class="btn btn-danger">Clear filter</button>
    </div>
    <div class="form-group col-sm-3">
        <select name="sort" id="" class="form-control sorted">
            {{--            <option {{$sort ==  \App\Enums\Sort::SORT_ID_ASC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_ID_ASC}}">ID tăng dần</option>--}}
            {{--            <option {{$sort ==  \App\Enums\Sort::SORT_ID_DESC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_ID_DESC}}">ID giảm dần</option>--}}
            {{--            <option {{$sort ==  \App\Enums\Sort::SORT_NAME_ASC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_NAME_ASC}}">Tên A - Z</option>--}}
            {{--            <option {{$sort ==  \App\Enums\Sort::SORT_NAME_DESC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_NAME_DESC}}">Tên Z - A</option>--}}
            {{--            <option {{$sort ==  \App\Enums\Sort::SORT_CREATED_AT_ASC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_CREATED_AT_ASC}}">Cũ nhất trước</option>--}}
            {{--            <option {{$sort ==  \App\Enums\Sort::SORT_CREATED_AT_DESC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_CREATED_AT_DESC}}">Mới nhất trước</option>--}}
        </select>
    </div>
@endsection
@section('table_head')
    <tr>
        <th>Id</th>
        <th>Product name</th>
        <th>Color</th>
        <th>View color</th>
        <th>Configuration</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Created at</th>
        <th class="text-center Product_Action">Actions</th>
    </tr>
@endsection
@section('table_body')
    <tr class="gradeX">
        <td>1</td>
        <td>Iphone 13</td>
        <td>Tím mắm tôm</td>
        <td>
            <div class="view_color" style="background: #b462d2"></div>
        </td>
        <td>8BG/RAM : 64BG/STORAGE</td>
        <td>100</td>
        <td>1000$</td>
        <td>01-01-2021</td>
        <td class="actions text-center">
            <a href="#" class="on-default edit-row text-primary"><i class="fa fa-pencil"></i></a>
            <a href="#" class="on-default remove-row text-danger"><i class="fa fa-trash-o"></i></a>
            <a href="#" class="on-default remove-row text-dark"><i class="fa fa-info-circle"></i></a>
        </td>
    </tr>
@endsection

