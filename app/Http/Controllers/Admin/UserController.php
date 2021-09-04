<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Role;
use App\Enums\Sort;
use App\Enums\Status;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        $sort = $request->query('sort');
        $query_builder = User::query();
        if ($search && strlen($search) > 0) {
            $query_builder = $query_builder->where('firstname', 'like', '%' . $search . '%')
                ->orWhere('lastname', 'like', '%' . $search . '%')
                ->orWhere('address', 'like', '%' . $search . '%')
                ->orWhere('phone', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('birthday', 'like', '%' . $search . '%');
        }
        if ($sort && $sort == Sort::SORT_ID_ASC) {
            $query_builder->orderBy('id', 'ASC')->get();
        }
        if ($sort && $sort == Sort::SORT_ID_DESC) {
            $query_builder->orderBy('id', 'DESC')->get();
        }
        if ($sort && $sort == Sort::SORT_CREATED_AT_ASC) {
            $query_builder->orderBy('created_at', 'ASC')->get();
        }
        if ($sort && $sort == Sort::SORT_CREATED_AT_DESC) {
            $query_builder->orderBy('created_at', 'DESC')->get();
        }
        if ($sort && $sort == Sort::SORT_NAME_ASC) {
            $query_builder->orderBy('firstname', 'ASC')->get();
        }
        if ($sort && $sort == Sort::SORT_NAME_DESC) {
            $query_builder->orderBy('firstname', 'DESC')->get();
        }
        if ($request->role_s) {
            $query_builder->where('role', $request->role_s);
        }
        if ($request->status) {
            $query_builder->where('status', $request->status);
        }
        $users = $query_builder->orderBy('id', 'DESC')->paginate(10);
        return view('admin.users.table', ['list' => $users, 'key_search' => $search, 'sort' => $sort, 'role' => $request->role_s, 'status' => $request->status]);
    }

    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return back();
    }

    public function update_status($id)
    {
        $user = User::find($id);
        if ($user->status == Status::ACTIVE) {
            $user->status = Status::IN_ACTIVE;
        } else {
            $user->status = Status::ACTIVE;
        }
        $user->save();
    }


    public function create()
    {
        $detail = null;
        return view('admin.users.form', [
            'detail' => $detail
        ]);
    }

    public function store(UserRequest $request)
    {
        $user = new User();
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('list_user');
    }

    public function edit($id)
    {
        $detail = User::find($id);
        return view('admin.users.form', [
            'detail' => $detail
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('list_user');
    }

    public function detail($id)
    {
        $user = User::find($id);
        return view('admin.users.profile', ['detail' => $user]);
    }

    public function login()
    {
        return view('admin.users.sigin');
    }

    public function process_login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            if (Auth::user()->role == Role::ADMIN) {
                return redirect()->route('list_user');
            } else {
                return redirect()->route('home');
            }
        } else {
            $message = 'Sai tên đăng nhập hoặc mật khẩu !';
            return back()->with(['msg_login'=>$message]);
        }
    }

    public function logout(){
        Auth::logout();
        return back();
    }


}
