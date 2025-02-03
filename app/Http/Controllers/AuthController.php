<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only(['username', 'password']);

        if (Auth::attempt($credentials)) {
            return redirect()->route('shortener.index');
        }

        return back()->withErrors(['Invalid email or password']);
    }

    public function loginForm()
    {
        return view('shortener-login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('shortener.login');
    }
}
