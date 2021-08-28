@extends('.admin.layouts.master')


@section('main_content')
    <div class="col-md-12">
        <form>
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title">@yield('title_form')</h2>
                </header>

                <div class="panel-body">
                    <div class="row form-group">
                        <div class="col-lg-4">
                            <input type="text" name="firstName" placeholder="First Name" class="form-control">
                        </div>

                        <div class="mb-md hidden-lg hidden-xl"></div>

                        <div class="col-lg-4">
                            <input type="email" name="lastName" placeholder="Last Name" class="form-control">
                        </div>

                        <div class="mb-md hidden-lg hidden-xl"></div>

                        <div class="col-lg-4">
                            <input type="email" name="email" placeholder="Your Email" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <textarea class="form-control" rows="5" placeholder="Type your message"></textarea>
                        </div>
                    </div>
                </div>
                <footer class="panel-footer">
                    <button class="btn btn-primary">Add Comment</button>
                </footer>
            </section>
        </form>
    </div>
@endsection
