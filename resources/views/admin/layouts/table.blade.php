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
            <h2 class="panel-title">@yield('title_table')</h2>
        </header>
        <div class="panel-body">
            <div class="row table_header">
                <div class="col-sm-5">
                    <div class="mb-md">
                        <button id="addToTable" class="btn btn-primary">Add <i class="fa fa-plus"></i></button>
                    </div>
                </div>
                <div class=" container_filter col-sm-7">
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
        </div>
    </section>
@endsection

@section('custom_js')
    <script>
        $('.sorted').change(function (){
            $('.form_filter').submit()
        })
    </script>
@endsection
