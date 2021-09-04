@section('title','list Order | Admin')
@extends('.admin.layouts.table')
@section('title_table','Orders table')
@section('custom_style_level_2')
    .Product_Action{
    min-width:120px;
    }
    #addToTable{
    display:none;
    }
@endsection
@section('option_filter')
    <div class="form-group col-sm-6" style="padding-left: 2px">
        <select name="status" id="" class="form-control sorted2">
            <option value="0">Trạng thái</option>
            <option {{$status == \App\Enums\Status::ACTIVE ?'selected' :'' }} value="{{\App\Enums\Status::ACTIVE}}">Chờ nhận hàng</option>
            <option {{$status == \App\Enums\Status::IN_ACTIVE ?'selected' :'' }} value="{{\App\Enums\Status::IN_ACTIVE}}">Đã nhận hàng</option>
        </select>
    </div>
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
            <option value="" hidden>Sắp xếp</option>
            <option {{$sort ==  \App\Enums\Sort::SORT_ID_ASC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_ID_ASC}}">ID tăng dần</option>
            <option {{$sort ==  \App\Enums\Sort::SORT_ID_DESC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_ID_DESC}}">ID giảm dần</option>
            <option {{$sort ==  \App\Enums\Sort::SORT_CREATED_AT_ASC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_CREATED_AT_ASC}}">Cũ nhất trước</option>
            <option {{$sort ==  \App\Enums\Sort::SORT_CREATED_AT_DESC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_CREATED_AT_DESC}}">Mới nhất trước</option>
        </select>
    </div>
@endsection
@section('table_head')
    <tr>
        <th>ID</th>
        <th>Total Price</th>
        <th>Users Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>Checkout</th>
        <th>Status</th>
        <th>Created At</th>
        <th class="text-center Product_Action">Actions</th>
    </tr>
@endsection
@section('table_body')
    @foreach($list as $item)
        <tr class="gradeX">
            <td>{{$item->id}}</td>
            <td>{{$item->total_price}}</td>
            <td>{{\App\Models\User::find($item->users_id)->firstname.' '.\App\Models\User::find($item->users_id)->lastname}}</td>
            <td>{{$item->ship_phone}}</td>
            <td>{{$item->ship_email}}</td>
            <td>{{$item->ship_address}}</td>
            <td>{{$item->is_checkout == \App\Enums\CheckoutStatus::UNPAID ? 'Chưa thanh toán' : 'Đã thanh toán'}}</td>
            <td>
                @if($item->status == \App\Enums\Status::ACTIVE)
                    Chờ nhận hàng
                @elseif($item->status == \App\Enums\Status::IN_ACTIVE)
                    Đã hủy
                @endif
            </td>
            <td>29-08-2021</td>
            <td class="actions text-center">
                <a href="#" class="on-default remove-row text-danger"><i class="fa fa-trash-o"></i></a>
                <a href="#" class="on-default remove-row text-dark"><i class="fa fa-info-circle"></i></a>
            </td>
        </tr>
    @endforeach
@endsection


