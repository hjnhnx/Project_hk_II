<!doctype html>
<html class="fixed">
@include('.admin.components.head')
<body>
<!-- start: page -->
<section class="body-sign">
    <div class="center-sign">
        <div class="panel panel-sign">
            <h2 style="transform: translateY(50px)">Sign In Admin Account</h2>
            <div class="panel-title-sign mt-xl text-right">
                <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
            </div>
            <div class="panel-body">
                <form action="{{route('admin_process_login')}}" method="post">
                    @csrf
                    <div class="form-group mb-lg">
                        <label>Email</label>
                        <div class="input-group input-group-icon">
                            <input name="email" type="text" class="form-control input-lg"/>
                            <span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
                        </div>
                    </div>
                    <br>
                    <div class="form-group mb-lg">
                        <div class="clearfix">
                            <label class="pull-left">Password</label>
                        </div>
                        <div class="input-group input-group-icon">
                            <input name="password" type="password" class="form-control input-lg"/>
                            <span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-right">
                            <button type="submit" class="btn btn-primary " style="width: 150px">Sign In</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

        <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2018. All rights reserved. Template by <a
                href="https://colorlib.com">Colorlib</a>.</p>
    </div>
</section>
<!-- end: page -->
@include('.admin.components.script')

</body>
</html>
