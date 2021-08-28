@extends('.admin.layouts.master')
@section('title','Demo title | Admin')

@section('main_content')
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">@yield('title_table')</h2>
        </header>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-4">
                    <div class="mb-md">
                        <button id="addToTable" class="btn btn-primary">Add <i class="fa fa-plus"></i></button>
                    </div>
                </div>
                <div class="col-sm-8">

                </div>
            </div>
            <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                <thead>
                <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr class="gradeX">
                    <td>Trident</td>
                    <td>Internet
                        Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td class="actions text-center">
                        <a href="#" class="on-default edit-row text-primary"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="on-default remove-row text-danger"><i class="fa fa-trash-o"></i></a>
                        <a href="#" class="on-default remove-row text-dark"><i class="fa fa-info-circle"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
