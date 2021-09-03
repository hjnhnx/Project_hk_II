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
    <section class="panel">

        <header class="panel-heading">
            <h2 class="panel-title">@yield('title_table') <a href="#" id="addToTable" style="float: right;transform: translateY(-5px)" class="btn btn-primary">Add <i class="fa fa-plus"></i></a></h2>
        </header>
        <div class="panel-body">
            <div class="row table_header">
                <div class="col-md-4 col-sm-4">
                    <div class="mb-md">
                        <form action="" method="get" class="form_filter2">
                            @yield('option_filter')
                        </form>
                    </div>
                </div>
                <div class=" container_filter col-md-8 col-sm-8">
                    <form action="" method="get" class="form_filter">
                        <div class="row col-12">
                            @yield('filter_form')
                        </div>
                    </form>
                </div>
            </div>
            <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                <thead>
                @yield('table_head')
                </thead>
                <tbody>
                @yield('table_body')
                </tbody>
            </table>
            <div class="row">
                <div class="col-sm-7"></div>
                <div class="col-sm-5">
{{--                    {{$list->links()}}--}}
                </div>
            </div>
            <div id="modalBasic" class="modal-block mfp-hide">
                <section class="panel">
                    <header class="panel-heading">
                        <h2 class="panel-title">Are you sure?</h2>
                    </header>
                    <div class="panel-body">
                        <iframe class="show_video" width="560" height="315" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <footer class="panel-footer">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button class="btn btn-danger modal-dismiss close_video">Cancel</button>
                            </div>
                        </div>
                    </footer>
                </section>
            </div>
        </div>
    </section>
@endsection

@section('custom_js')
    <script>
        $('.sorted').change(function (){
            $('.form_filter').submit()
        })
        $('.sorted2').change(function (){
            $('.form_filter2').submit()
        })

        $('.btn_show_video').click(function (){
            $('.show_video').attr('src',this.slot)
        })
        $('.close_video').click(function (){
            $('.show_video').attr('src','')
        })
        function changeStatus(id){
            var perPage = window.location.href.split("/")[4];
            var page = perPage.split('?')[0]
            var protocol = window.location.protocol
            var host = window.location.hostname
            var port = window.location.port
            var url = protocol+'//'+host+':'+port
            $.get(`${url}/admin/${page}/update-status/${id}`, function(data){});
        }
    </script>
    @yield('Extra_JS')
@endsection
