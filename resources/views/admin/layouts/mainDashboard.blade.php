@extends('.admin.layouts.master')
@section('custom_style')
    <style>
        @yield('custom_style_level_2')
        .table_header {
            position: relative;
        }

    </style>
@endsection

@section('main_content')
    <h2>Thống kê</h2>
    <section role="main" class="content-body">

        <div id="piechart" style="width: 1200px; height: 500px;margin: auto"></div>
        <div style="width: 1200px;height: 50px;margin: auto;padding-bottom: 180px!important;">
            <span>Nhập khoảng thời gian</span>
            <br>
            <div class="row">
                <div class="form-group col-md-3">
                    <label for="">Từ</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Đến</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Xem kết quả</label>
                    <button class="btn btn-danger form-control">Xem kết quả</button>
                </div>
            </div>
        </div>
        <div id="chart_div" style="width: 1200px; height: 500px;margin: auto"></div>
        <div style="width: 1200px;height: 50px;margin: auto;padding-bottom: 180px!important;">
            <span>Nhập khoảng thời gian</span>
            <br>
            <div class="row">
                <div class="form-group col-md-3">
                    <label for="">Từ</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Đến</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Xem kết quả</label>
                    <button class="btn btn-danger form-control">Xem kết quả</button>
                </div>
            </div>
        </div>
        <div id="chart_div2" style="width: 1200px; height: 500px;margin: auto"></div>
        <div style="width: 1200px;height: 50px;margin: auto;padding-bottom: 180px!important;">
            <span>Nhập khoảng thời gian</span>
            <br>
            <div class="row">
                <div class="form-group col-md-3">
                    <label for="">Từ</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Đến</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Xem kết quả</label>
                    <button class="btn btn-danger form-control">Xem kết quả</button>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('custom_js')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">


        document.addEventListener('DOMContentLoaded',function (){

            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var url = window.location.origin
                $.get(`${url}/api/brand`, function(res, status){
                    var data = google.visualization.arrayToDataTable([
                        ['Apple', 'Hours per Day'],
                        ["Apple",res[0]],
                        ["SamSung",res[1]],
                        ["Xiaomi",res[2]],
                        ["Huawei",res[3]],
                        ["Zte",res[4]],
                        ["Sony",res[5]],
                        ["LG",res[6]],
                        ["Asus",res[7]],
                        ["Oppo",res[8]],
                        ["Nokia",res[9]],
                        ["Vivo",res[10]],
                        ["Google",res[11]],
                        ["Motorola",res[12]]
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
                [1, 7867,8786],
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
                [1, 7867,8786],
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
