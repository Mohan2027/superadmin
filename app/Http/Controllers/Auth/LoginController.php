<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('Auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = DB::table('users')
            ->where('email', $credentials['email'])
            ->first();

        if ($user && password_verify($credentials['password'], $user->password)) {
            if ($user->is_admin == 1) {
                Log::info('Admin logged in:' . $user->email);
            } else {
                Log::info('User logged in:' . $user->email);
            }

            Auth::loginUsingId($user->id);

            $request->session()->put('user_email', $user->email);

            return redirect('/dashboard');
        } else {
            Log::warning('Failed login attempt for email: ' . $credentials['email']);
            throw ValidationException::withMessages(['loginError' => 'Invalid username or password']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->forget('user_email');
        return redirect('/login');
    }
}
