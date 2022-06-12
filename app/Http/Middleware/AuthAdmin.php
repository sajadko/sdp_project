<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if (Auth::user()->user_type === 'admin') {
            session(['user_type' => 'admin']);
        } else if (Auth::user()->user_type === 'customer') {
            session(['user_type' => 'customer']);
        }

        if (session('user_type') === 'admin') {
            return $next($request);
        } else {
            session()->flush();
            return redirect()->route('login');
        }
    }
}
