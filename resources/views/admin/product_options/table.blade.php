@section('title','List Product Option | Admin')
@extends('.admin.layouts.table')
@section('title_table','Product options table')
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
    #addToTable {
    display:none;
    }
    .show_avatar {
    height: 50px;
    width: 50px;
    object-fit: cover;
    border-radius: 5px;
    }
@endsection
@section('option_filter')
    <div class="form-group col-sm-6" style="padding: 0 1px">
        <select name="color_s" id="" class="form-control sorted2">
            <option value="0">Colors</option>
            @foreach($colors as $item)
                <option {{$item->id == $color_s ? 'selected' : ''}} value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
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
                        <option {{$sort ==  \App\Enums\Sort::SORT_PRICE_ASC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_PRICE_ASC}}">giá từ thấp đến cao</option>
                        <option {{$sort ==  \App\Enums\Sort::SORT_PRICE_DESC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_PRICE_DESC}}">Giá từ cao đến thấp</option>
                        <option {{$sort ==  \App\Enums\Sort::SORT_CREATED_AT_ASC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_CREATED_AT_ASC}}">Cũ nhất trước</option>
                        <option {{$sort ==  \App\Enums\Sort::SORT_CREATED_AT_DESC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_CREATED_AT_DESC}}">Mới nhất trước</option>
        </select>
    </div>
@endsection
@section('table_head')
    <tr>
        <th>Id</th>
        <th>Product name</th>
        <th>Thumbnail</th>
        <th>Color</th>
        <th>Storage</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Created at</th>
        <th class="text-center Product_Action">Actions</th>
    </tr>
@endsection
@section('table_body')
    @foreach($product_options as $item)
        <tr class="gradeX">
            <td>{{$item->id}}</td>
            <td>{{\App\Models\Product::find($item->product_id)->name}}</td>
            <td>
                <img class="show_avatar" src="{{$item->thumbnail}}" alt="">
            </td>
            <td>{{\App\Models\Color::find($item->color_id)->name}} <p
                    style="border: #bababa 1px solid;height: 30px;width: 30px;float: left;margin-right: 5px;background: {{\App\Models\Color::find($item->color_id)->color_code}}"></p>
            </td>
            <td>{{$item->ram}}BG/RAM : {{$item->rom}}BG/ROM</td>
            <td>{{$item->quantity}}</td>
            <td><p style="color: #ff5454;font-weight: bold">$ {{$item->price + \App\Models\Product::find($item->product_id)->price}}</p></td>
            <td>{{$item->created_at->format('d/m/Y')}}</td>
            <td class="actions text-center">
                <a href="{{route('edit_product_option',$item->id)}}" class="on-default edit-row text-primary"><i class="fa fa-pencil"></i></a>
                <a href="#" class="on-default remove-row text-danger"><i class="fa fa-trash-o"></i></a>
                <a href="#" class="on-default remove-row text-dark"><i class="fa fa-info-circle"></i></a>
            </td>
        </tr>
    @endforeach

@endsection

