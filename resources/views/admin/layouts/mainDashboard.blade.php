@extends('.admin.layouts.master')
@section('custom_style')
    <style>
        * {
            box-sizing: border-box;
        }

    </style>
@endsection

@section('main_content')
    <h1 style="color: #aeaeae">Thống kê</h1>
    <div class="row" style="margin: 0 auto; padding: 0;width: 1200px">
        <div class="col-md-3" style="height: 130px ;padding: 3px">
            <div style="border: #fca3a3 5px solid;height: 100%;padding: 5px">
                <p style="font-size: 16px;font-weight: 600">Số lượng đơn hàng</p>
                <h1 class="text-center">{{$total_order}}</h1>
            </div>
        </div>
        <div class="col-md-3" style="height: 130px ;padding: 3px">
            <div style="border: #8ea6fe 5px solid;height: 100%;padding: 5px">
                <p style="font-size: 16px;font-weight: 600">Số lượng đơn hàng đã thanh toán</p>
                <h1 class="text-center">{{$order_payment}}</h1>
            </div>
        </div>
        <div class="col-md-3" style="height: 130px ;padding: 3px">
            <div style="border: #7bce77 5px solid;height: 100%;padding: 5px">
                <p style="font-size: 16px;font-weight: 600">Doanh thu</p>
                <h3 class="text-center">{{number_format($total_price)}} vnđ</h3>
            </div>
        </div>
        <div class="col-md-3" style="height: 130px ;padding: 3px">
            <div style="border: #ca6500 5px solid;height: 100%;padding: 5px">
                <p style="font-size: 16px;font-weight: 600">Người dùng hệ thống</p>
                <h1 class="text-center">{{$total_user}}</h1>
            </div>
        </div>
    </div>
    <h2>.</h2>
    <section role="main" class="content-body">

        <div style="width: 1200px;height: 50px;margin: auto;padding-bottom: 100px!important;">
            <div class="row">
                <div class="form-group col-md-3">
                    <label for="">Từ ngày</label>
                    <input name="chart_1_start" id="chart_1_start" type="date" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Đến ngày</label>
                    <input name="chart_1_end" id="chart_1_end" type="date" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Xem kết quả</label>
                    <button class="btn btn-danger form-control chart_filter1">Xem kết quả</button>
                </div>
            </div>
        </div>
        <div id="piechart" style="width: 1200px; height: 500px;margin: auto"></div>

        <div style="width: 1200px;height: 50px;margin: auto;padding-bottom: 100px!important;">
            <div class="row">
                <div class="form-group col-md-3">
                    <label for="">Từ ngày</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Đến ngày</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Xem kết quả</label>
                    <button class="btn btn-danger form-control">Xem kết quả</button>
                </div>
            </div>
        </div>
        <div id="chart_div" style="width: 1200px; height: 500px;margin: auto"></div>

    </section>
@endsection

@section('custom_js')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {

            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            $('.chart_filter1').click(function () {
                var start_time = $('#chart_1_start').val()
                var end_time = $('#chart_1_end').val()
                var url = window.location.origin
                $.post(`${url}/api/filter`,
                    {
                        start_time: start_time,
                        end_time: end_time
                    },
                    function (res, status) {
                        var data = google.visualization.arrayToDataTable([
                            ['Apple', 'Hours per Day'],
                            ["Apple", res[0]],
                            ["SamSung", res[1]],
                            ["Xiaomi", res[2]],
                            ["Huawei", res[3]],
                            ["Zte", res[4]],
                            ["Sony", res[5]],
                            ["LG", res[6]],
                            ["Asus", res[7]],
                            ["Oppo", res[8]],
                            ["Nokia", res[9]],
                            ["Vivo", res[10]],
                            ["Google", res[11]],
                            ["Motorola", res[12]]
                        ]);
                        var options = {
                            title: 'Biều đồ doanh số sản phẩm theo hãng',
                        };
                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                        chart.draw(data, options);
                    });
            })

            function drawChart() {
                var url = window.location.origin
                $.get(`${url}/api/brand`, function (res, status) {
                    var data = google.visualization.arrayToDataTable([
                        ['Apple', 'Hours per Day'],
                        ["Apple", res[0]],
                        ["SamSung", res[1]],
                        ["Xiaomi", res[2]],
                        ["Huawei", res[3]],
                        ["Zte", res[4]],
                        ["Sony", res[5]],
                        ["LG", res[6]],
                        ["Asus", res[7]],
                        ["Oppo", res[8]],
                        ["Nokia", res[9]],
                        ["Vivo", res[10]],
                        ["Google", res[11]],
                        ["Motorola", res[12]]
                    ]);
                    var options = {
                        title: 'Biều đồ doanh số sản phẩm theo hãng',
                    };
                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                    chart.draw(data, options);
                });
            }
        })


        google.charts.load('current', {packages: ['corechart', 'line']});
        google.charts.setOnLoadCallback(drawBackgroundColor);
        google.charts.setOnLoadCallback(drawBackgroundColor2);

        function drawBackgroundColor() {
            var data2 = new google.visualization.DataTable();
            data2.addColumn('number', 'X');
            data2.addColumn('number', 'Năm nay');
            data2.addColumn('number', 'Năm trước');

            data2.addRows([
                [0, 0, 0],
                [1, 7867, 8786],
                [2, 30, 22],
                [3, 52, 44],
                [4, 60, 52],
                [5, 55, 47],
                [6, 62, 54],
                [7, 63, 55],
                [8, 72, 64],
                [9, 71, 63],
                [10, 64, 56],
                [11, 70, 62],
                [12, 70, 62],
            ]);

            var options = {
                title: 'Doanh thu theo năm',
                hAxis: {
                    title: 'Tháng'
                },
                vAxis: {
                    title: 'Doanh thu (vnđ)'
                },
                backgroundColor: '#ffffff'
            };

            var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
            chart.draw(data2, options);
        }

        function drawBackgroundColor2() {
            var data3 = new google.visualization.DataTable();
            data3.addColumn('number', 'X');
            data3.addColumn('number', 'tháng 4');
            data3.addColumn('number', 'tháng 3');

            data3.addRows([
                [0, 0, 0],
                [1, 7867, 8786],
                [2, 30, 22],
                [3, 52, 44],
                [4, 60, 52],
                [5, 55, 47],
                [6, 62, 54],
                [7, 63, 55],
                [8, 72, 64],
                [9, 71, 63],
                [10, 64, 56],
                [11, 70, 62],
                [12, 70, 62],
            ]);

            var options = {
                title: 'Doanh thu theo tháng',
                hAxis: {
                    title: 'Tháng'
                },
                vAxis: {
                    title: 'Doanh thu (vnđ)'
                },
                backgroundColor: '#ffffff'
            };

            var chart = new google.visualization.LineChart(document.getElementById('chart_div2'));
            chart.draw(data3, options);
        }


    </script>
    @yield('Extra_JS')
@endsection
