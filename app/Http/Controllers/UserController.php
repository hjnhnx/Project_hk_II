<?php

namespace App\Http\Controllers;

use App\Models\User;
use hanneskod\classtools\Iterator\Filter\FilterTrait;
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
            $user->password = Hash::make($request->password);
            $user->save();
        }
    }
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
                return redirect()->route('user_profile');
        } else {
            $message = 'Sai tên đăng nhập hoặc mật khẩu !';
            return back()->with(['msg_login' => $message]);
        }
    }
    public function profile(){
        if (Auth::check()){
            return view('client.profile',[
                'banner'=>null,
                'sub_banner'=>null,
            ]);
        }else{
            return redirect()->route('login_register')->with('msg_authentication','Bạn phải đăng nhập để tiếp tục');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login_register');
    }
    public function edit_profile(){
        if (Auth::check()){
            return view('client.edit_profile',[
                'user'=>Auth::user(),
                'banner'=>null,
                'sub_banner'=>null,
            ]);
        }else{
            return redirect()->route('login_register')->with('msg_authentication','Bạn phải đăng nhập để tiếp tục');
        }
    }
    public function update(Request $request){
        $user = User::find(Auth::id());
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('user_profile');
    }
}
