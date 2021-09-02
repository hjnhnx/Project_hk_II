@extends('.admin.layouts.master')
@section('custom_style')

        @yield('custom_style_level_2')

@endsection
@section('main_content')
    <div style="display: flex;justify-content: center">
        <div style="display: none">
            @yield('upload')
        </div>

        @yield('size_form')

        <form action="" method="post" id="form_admin">
            @csrf
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title">@yield('title_form')</h2>
                </header>
                <div class="panel-body">
                    @yield('input_form')
                </div>
                <div class="panel-body">
                    @yield('add_form')
                </div>
                <footer class="panel-footer">
                    <button style="width: 120px" class="btn btn-primary btn_submit">Submit</button>
                    @yield('Extra_btn')
                    <button style="width: 120px" class="btn btn-warning" type="reset">Reset</button>

                </footer>
            </section>
        </form>
    </div>
    </div>
@endsection
@section('custom_js')

    @yield('Extra_js')
@endsection
