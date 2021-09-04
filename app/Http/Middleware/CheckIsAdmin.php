<?php

namespace App\Http\Middleware;

use App\Enums\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    protected $except = [
        '/admin/user/login'
    ];

    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role == Role::ADMIN) {
            return $next($request);
        } else {
            return redirect()->route('admin_login');
        }

    }
}
