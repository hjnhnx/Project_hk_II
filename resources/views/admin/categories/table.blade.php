@section('title','List category | Admin')
@extends('.admin.layouts.table')
@section('title_table','Categories table')
@section('filter_form')
@section('option_filter')
    <div class="form-group col-sm-4" style="padding-left: 2px">
        <select name="status" id="" class="form-control sorted2">
            <option value="0">Status</option>
            <option {{$status == \App\Enums\Status::ACTIVE ?'selected' :'' }} value="{{\App\Enums\Status::ACTIVE}}">
                Active
            </option>
            <option
                {{$status == \App\Enums\Status::IN_ACTIVE ?'selected' :'' }} value="{{\App\Enums\Status::IN_ACTIVE}}">In
                Active
            </option>
        </select>
    </div>
@endsection
<div class="form-group col-sm-5">
    <input value="{{$key_search != null ? $key_search : ''}}" type="text" class="form-control"
           placeholder="Enter keyword" name="search">
</div>
<div class="form-group col-sm-4">
    <button class="btn btn-primary">Search</button>
    <button class="btn btn-danger">Clear filter</button>
</div>
<div class="form-group col-sm-3">
    <select name="sort" id="" class="form-control sorted">
        <option value="" hidden>Sắp xếp</option>
        <option
            {{$sort ==  \App\Enums\Sort::SORT_ID_ASC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_ID_ASC}}">ID
            tăng dần
        </option>
        <option
            {{$sort ==  \App\Enums\Sort::SORT_ID_DESC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_ID_DESC}}">
            ID giảm dần
        </option>
        <option
            {{$sort ==  \App\Enums\Sort::SORT_NAME_ASC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_NAME_ASC}}">
            Tên A - Z
        </option>
        <option
            {{$sort ==  \App\Enums\Sort::SORT_NAME_DESC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_NAME_DESC}}">
            Tên Z - A
        </option>
        <option
            {{$sort ==  \App\Enums\Sort::SORT_CREATED_AT_ASC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_CREATED_AT_ASC}}">
            Cũ nhất trước
        </option>
        <option
            {{$sort ==  \App\Enums\Sort::SORT_CREATED_AT_DESC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_CREATED_AT_DESC}}">
            Mới nhất trước
        </option>

    </select>
</div>
@endsection
@section('table_head')
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Status</th>
        <th>Created At</th>
        <th class="text-center">Actions</th>
    </tr>
@endsection
@section('table_body')
    @foreach($list as $item)
        <tr class="gradeX">
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>
                <label class="switch">
                    <input onchange="changeStatus({{$item->id}})"
                           type="checkbox" {{$item->status == \App\Enums\Status::ACTIVE ? 'checked' : '' }}>
                    <span class="slider round"></span>
                </label>
            </td>
            <td>{{$item->created_at}}</td>
            <td class="actions text-center">
                <a href="{{route('edit_category',$item->id)}}" class="on-default edit-row text-primary"><i
                        class="fa fa-pencil"></i></a>
                <a onclick="return confirm('Bạn có chắc muốn xóa danh mục này { Xóa danh mục này đồng nghĩa với các sản phẩm liên quan cũng sẽ bị xóa khỏi hệ thống }')"
                   href="{{route('delete_category',$item->id)}}" class="on-default remove-row text-danger"><i
                        class="fa fa-trash-o"></i></a>
                <a href="#" class="on-default remove-row text-dark"><i class="fa fa-info-circle"></i></a>
            </td>
        </tr>
    @endforeach
@endsection

