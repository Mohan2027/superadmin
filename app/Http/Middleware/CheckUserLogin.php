<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CheckUserLogin
{
    public function handle(Request $request, Closure $next)
    {
        
        Log::info('CheckUserLogin middleware: Before handling');

        if ($request->session()->has('user_email')) {
         
            Log::info('User is logged in');
            return $next($request);
        }

     
        if ($request->is('login')) {
            Log::info('Allowing access to the login page');
            return $next($request);
        }

        Log::info('User is not logged in, redirecting to login');
        return redirect()->route('login'); 
    }
}