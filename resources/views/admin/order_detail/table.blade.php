@section('title','List Order Detail | Admin')
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
@extends('.admin.layouts.table')

@section('filter_form')
    <div class="form-group col-sm-5">
{{--        <input value="{{$key_search != null ? $key_search : ''}}" type="text" class="form-control"--}}
{{--               placeholder="Enter keyword" name="search">--}}
    </div>
    <div class="form-group col-sm-4">
        <button class="btn btn-primary">Search</button>
        <button class="btn btn-danger">Clear filter</button>
    </div>
    <div class="form-group col-sm-3">
        <select name="sort" id="" class="form-control sorted">
{{--            <option--}}
{{--                {{$sort ==  \App\Enums\Sort::SORT_ID_ASC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_ID_ASC}}">ID--}}
{{--                tăng dần--}}
{{--            </option>--}}
{{--            <option--}}
{{--                {{$sort ==  \App\Enums\Sort::SORT_ID_DESC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_ID_DESC}}">--}}
{{--                ID giảm dần--}}
{{--            </option>--}}
{{--            <option--}}
{{--                {{$sort ==  \App\Enums\Sort::SORT_NAME_ASC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_NAME_ASC}}">--}}
{{--                Tên A - Z--}}
{{--            </option>--}}
{{--            <option--}}
{{--                {{$sort ==  \App\Enums\Sort::SORT_NAME_DESC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_NAME_DESC}}">--}}
{{--                Tên Z - A--}}
{{--            </option>--}}
{{--            <option--}}
{{--                {{$sort ==  \App\Enums\Sort::SORT_CREATED_AT_ASC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_CREATED_AT_ASC}}">--}}
{{--                Cũ nhất trước--}}
{{--            </option>--}}
{{--            <option--}}
{{--                {{$sort ==  \App\Enums\Sort::SORT_CREATED_AT_DESC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_CREATED_AT_DESC}}">--}}
{{--                Mới nhất trước--}}
{{--            </option>--}}
        </select>
    </div>
@endsection
@section('table_head')
    <tr>
        <th>Id</th>
        <th>Product Name</th>
        <th>View Color</th>
        <th>Configuration</th>
        <th>User Name</th>
        <th>Quantity</th>
        <th>Total</th>
        <th class="text-center Product_Action">Actions</th>
    </tr>
@endsection
@section('table_body')
    <tr class="gradeX">
        <td>1</td>
        <td>Ip6 pro max</td>
        <td>
            <div class="view_color" style="background: gold"></div>
        </td>
        <td>4gb/ram 64GB</td>
        <td>Vũ Hoàng Ngọc Anh</td>
        <td>100</td>
        <td>44444444</td>
        <td class="actions text-center">
            <a href="#" class="on-default edit-row text-primary"><i class="fa fa-pencil"></i></a>
            <a href="#" class="on-default remove-row text-danger"><i class="fa fa-trash-o"></i></a>
            <a href="#" class="on-default remove-row text-dark"><i class="fa fa-info-circle"></i></a>
        </td>
    </tr>
@endsection

