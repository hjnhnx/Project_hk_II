@section('title','Form product | Admin')
@extends('.admin.layouts.form')
@section('title_form','Create product')

@section('size_form')
    <div class="col-md-6">
        @endsection

        @section('input_form')
            <div class="row form-group">
                <div class="col-lg-4">
                    <label for="">FirstName</label>
                    <input type="text" name="firstname" placeholder="First Name" class="form-control">
                </div>

                <div class="mb-md hidden-lg hidden-xl"></div>

                <div class="col-lg-4">
                    <label for="">LastName</label>
                    <input type="text" name="lastname" placeholder="Last Name" class="form-control">
                </div>

                <div class="mb-md hidden-lg hidden-xl"></div>

                <div class="col-lg-4">
                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="Your Email" class="form-control">
                </div>
            </div>
            <br>
            <div class="row form-group">
                <div class="col-lg-12">
                    <label for="">Avatar</label>
                    <input type="text" name="avatar" placeholder="Enter url avatar" class="form-control">
                </div>
            </div>
            <br>
            <div class="row form-group">
                <div class="col-lg-3">
                    <label for="">Birthday</label>
                    <input type="date" name="birthday" placeholder="Enter your birthday" class="form-control">
                </div>
                <div class="col-lg-3">
                    <label for="">Phone</label>
                    <input type="text" name="phone" placeholder="Enter your phone number" class="form-control">
                </div>
                <div class="col-lg-6">
                    <label for="">Address</label>
                    <input type="text" name="address" placeholder="Enter your address" class="form-control">
                </div>
            </div>
            <br>
            <div class="row form-group">
                <div class="col-lg-5">
                    <label for="">Password</label>
                    <input type="password" name="password" placeholder="Enter your password" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-lg-5">
                    <label for="">Confirm Password</label>
                    <input type="password" name="confirm_password" placeholder="Confirm password" class="form-control">
                </div>
            </div>
@endsection
