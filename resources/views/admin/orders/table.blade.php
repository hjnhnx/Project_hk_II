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
            <option value="0">Trạng thái đơn hàng</option>
            <option {{$status == \App\Enums\OrderStatus::Create ?'selected' :'' }} value="{{\App\Enums\OrderStatus::Create}}">Khởi tạo</option>
            <option {{$status == \App\Enums\OrderStatus::Delivery ?'selected' :'' }} value="{{\App\Enums\OrderStatus::Delivery}}">Đang giao hàng</option>
            <option {{$status == \App\Enums\OrderStatus::Complete ?'selected' :'' }} value="{{\App\Enums\OrderStatus::Complete}}">Hoàn thành</option>
            <option {{$status == \App\Enums\OrderStatus::Cancel ?'selected' :'' }} value="{{\App\Enums\OrderStatus::Cancel}}">Đã hủy</option>
        </select>
    </div>
    <div class="form-group col-sm-6" style="padding-left: 2px">
        <select name="status" id="" class="form-control sorted2">
            <option value="0">Trạng thái thanh toán</option>
            <option {{$status == \App\Enums\OrderStatus::Create ?'selected' :'' }} value="{{\App\Enums\OrderStatus::Create}}">Khởi tạo</option>
            <option {{$status == \App\Enums\OrderStatus::Delivery ?'selected' :'' }} value="{{\App\Enums\OrderStatus::Delivery}}">Đang giao hàng</option>
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

@section('extra_filter')
{{--    <div style="height: 100px" class="col-md-12 row">--}}
{{--        <div class="form-group col-md-3">--}}
{{--            <input type="text" class="form-control">--}}
{{--        </div>--}}
{{--        <div class="form-group col-md-3">--}}
{{--            <input type="text" class="form-control">--}}
{{--        </div>--}}
{{--        <div class="form-group col-md-3">--}}
{{--            <input type="text" class="form-control">--}}
{{--        </div>--}}
{{--        <div class="form-group col-md-3">--}}
{{--            <input type="text" class="form-control">--}}
{{--        </div>--}}
{{--        <div class="form-group col-md-3">--}}
{{--            <input type="text" class="form-control">--}}
{{--        </div>--}}
{{--        <div class="form-group col-md-3">--}}
{{--            <input type="text" class="form-control">--}}
{{--        </div>--}}
{{--        <div class="form-group col-md-3">--}}
{{--            <input type="text" class="form-control">--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection

@section('table_head')
    <tr>
        <th>Chọn</th>
        <th>Mã đơn hàng</th>
        <th>Tổng giá</th>
        <th>Họ và tên</th>
        <th>thành viên</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Địa chỉ</th>
        <th>Trạng thái thanh toán</th>
        <th>Trạng thái đơn hàng</th>
        <th>Ngày tạo</th>
        <th class="text-center ">Thao tác</th>
    </tr>
@endsection
@section('table_body')
    @foreach($list as $item)
        <tr class="gradeX">
            <td>
                <input type="checkbox" class="checkbox_choice" value="{{$item->id}}">
            </td>
            <td># {{$item->order_code}}</td>
            <td>{{number_format($item->total_price)}} vnđ</td>
            <td>{{$item->ship_name}}</td>
            <td>{{$item->user_id ? 'YES' : 'NO'}}</td>
            <td>{{$item->ship_phone}}</td>
            <td>{{$item->ship_email}}</td>
            <td>{{$item->ship_address}}</td>
            <td>{{$item->is_checkout == \App\Enums\CheckoutStatus::UNPAID ? 'Chưa thanh toán' : 'Đã thanh toán'}}</td>
            <td>
                @if($item->status == \App\Enums\OrderStatus::Create)
                    Đã tạo đơn hàng
                @elseif($item->status == \App\Enums\OrderStatus::Delivery)
                    Đang giao hàng
                @elseif($item->status == \App\Enums\OrderStatus::Complete)
                    Đã nhận hàng
                @elseif($item->status == \App\Enums\OrderStatus::Cancel)
                    Đã hủy đơn hàng
                @endif
            </td>
            <td>29-08-2021</td>
            <td class="actions text-center">
                <a href="/admin/order-detail/{{$item->id}}/show" class="on-default remove-row text-dark"><i class="fa fa-info-circle"></i></a>
            </td>
        </tr>
    @endforeach
    <div style="position: absolute;bottom: 20px">
        <span style="margin-right: 30px">Check all <input id="check_all" type="checkbox" style="transform: translateY(2px)"></span>
        <select name="order_status" id="order_status" style="width: 130px">
            <option hidden>Change status</option>
            <option value="{{\App\Enums\OrderStatus::Cancel}}">Cancel</option>
            <option value="{{\App\Enums\OrderStatus::Complete}}">Complete</option>
            <option value="{{\App\Enums\OrderStatus::Delivery}}">Delivery</option>
            <option value="{{\App\Enums\OrderStatus::Create}}">Create</option>
        </select>
        <button class="btn btn-primary btn_submit" style="width: 120px">Apply</button>
        <form action="{{route('update_status')}}" id="form_update_status" method="post" style="width: 0;height: 0;overflow: hidden!important;">
            @csrf
            <div style="width: 0;height: 0;overflow: hidden!important;">
                <input type="text" name="array_id" id="array_id">
                <input type="text" name="desire" id="desire">
            </div>
        </form>
    </div>
@endsection

@section('Extra_JS')
    <script>
        document.addEventListener('DOMContentLoaded',function (){
            $('#check_all').change(function (){
                if ($(this).is(':checked')){
                    $('.checkbox_choice').prop( "checked", true )
                }else {
                    $('.checkbox_choice').prop( "checked", false )
                }
            })
            $('#order_status').change(function (){
                $('#desire').val(this.value)
            })
            $('.btn_submit').click(function (){
                var checkboxs = document.querySelectorAll('.checkbox_choice')
                var items = []
                for (let i = 0; i < checkboxs.length; i++) {
                    if(checkboxs[i].checked){
                        items.push(checkboxs[i].value)
                    }
                }
                $('#array_id').val(JSON.stringify(items))
                if ($('#desire').val() === ''){
                    alert('Vui lòng chọn thao tác để tiếp tục')
                }else {
                    $('#form_update_status').submit()
                }
            })
        })
    </script>
@endsection


