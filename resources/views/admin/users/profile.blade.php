@section('title','List user | Admin')
@extends('.admin.layouts.master')

@section('main_content')
    <div class="col-sm-12" style="display: flex;justify-content: center;flex-wrap: wrap">
        <div class="col-sm-7" style="display: flex;justify-content: center">
            <img src="{{$detail->avatar}}" alt="" style="height: 130px;width: 130px;object-fit: cover;border-radius: 50%;border: #ff7a7a 3px solid">
        </div>
        <div class="col-sm-7" style="display: flex;justify-content: center">

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">{{$detail->firstname}}</th>
                </tr>
                <tr>
                    <th scope="col">Last name</th>
                    <th scope="col">{{$detail->lastname}}</th>
                </tr>
                <tr>
                    <th scope="col">Email</th>
                    <th scope="col">{{$detail->email}}</th>
                </tr>
                <tr>
                    <th scope="col">Phone Number</th>
                    <th scope="col">{{$detail->phone}}</th>
                </tr>
                <tr>
                    <th scope="col">Birthday</th>
                    <th scope="col">{{$detail->birthday}}</th>
                </tr>
                <tr>
                    <th scope="col">Address</th>
                    <th scope="col">{{$detail->address}}</th>
                </tr>
                <tr>
                    <th scope="col">Date of join</th>
                    <th scope="col">{{$detail->created_at}}</th>
                </tr>
                <tr>
                    <th scope="col">Role</th>
                    <th scope="col">{{$detail->role == \App\Enums\Role::ADMIN ? 'Admin' : 'User'}}</th>
                </tr>
                <tr>
                    <th scope="col">
                        <a href="{{route('list_user')}}" class="btn btn-default">List User</a>
                    </th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection
