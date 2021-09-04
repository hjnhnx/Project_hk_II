@section('title','List Order Detail | Admin')
@section('title_table','Order detail table')
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
    #addToTable{
    display:none;
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
            <option value="" hidden>Sắp xếp</option>
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
        <th>ID</th>
        <th>Product Name</th>
        <th>Color</th>
        <th>Configuration</th>
        <th>User Name</th>
        <th>Quantity</th>
        <th>Total price</th>
        <th>unit price</th>
        <th class="text-center Product_Action">Actions</th>
    </tr>
@endsection
@section('table_body')
    @foreach($list as $item)
        <tr class="gradeX">
            <td>{{$item->id}}</td>
            <td>{{\App\Models\Product::find($item->product_option->product_id)->name}}</td>
            <td>
                <div class="view_color" style="background: {{\App\Models\Color::find($item->product_option->color_id)->color_code}}"></div>
            </td>
            <td>{{$item->product_option->ram}}GB/RAM - {{$item->product_option->rom}}GB/ROM</td>
            <td>{{\App\Models\User::find($item->order->users_id)->firstname . ' ' . \App\Models\User::find($item->order->users_id)->lastname }}</td>
            <td>{{$item->quantity}}</td>
            <td>$ {{$item->unit_price * $item->quantity}}</td>
            <td>$ {{$item->unit_price}}</td>
            <td class="actions text-center">
                <a href="#" class="on-default edit-row text-primary"><i class="fa fa-pencil"></i></a>
                <a href="#" class="on-default remove-row text-danger"><i class="fa fa-trash-o"></i></a>
                <a href="#" class="on-default remove-row text-dark"><i class="fa fa-info-circle"></i></a>
            </td>
        </tr>
    @endforeach
@endsection
