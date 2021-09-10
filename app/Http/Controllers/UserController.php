<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request){
        $is_user = User::query()->where('email',$request->email)->first();
        if ($is_user){
            return back()->with('msg_error','Email '.$request->email.' đã được sử dụng!');
        }else{
            $user = new User();
            $user->fill($request->all());
            $user->avatar = 'https://thumbs.dreamstime.com/b/default-avatar-profile-icon-social-media-user-vector-image-icon-default-avatar-profile-icon-social-media-user-vector-image-209162840.jpg';
            $user->password = Hash::make($request->password);
            $user->save();
        }
    }
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
                return redirect()->route('product');
        } else {
            $message = 'Sai tên đăng nhập hoặc mật khẩu !';
            return back()->with(['msg_login' => $message]);
        }
    }
}