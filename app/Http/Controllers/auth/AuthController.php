<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function signIn(Request $req)
    {
        $credentials = [
            'sign_id' => $req->sign_id,
            'password' => $req->password,
        ];

        // return $credentials;

        // return Auth::attempt($credentials);

        if (Auth::attempt($credentials)) {
            // $req->session()->regenerate();
            return redirect()->intended('/buat-desain-baru');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $req)
    {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('/');
    }
}
