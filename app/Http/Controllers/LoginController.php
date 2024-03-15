<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth/login');
    }

    public function authenticate(LoginRequest $request)
    {
        $credentials = $request->validated();
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Mendapatkan pengguna yang berhasil login
            $user = Auth::user();

            // Memeriksa level pengguna dan mengarahkannya sesuai
            if ($user->level === 'admin') {
                return redirect()->intended('admin/dashboard');
            } elseif ($user->level === 'peserta') {
                return redirect()->intended('peserta/dashboard');
            }
        }

        return back()->with('loginError', 'Login failed!');
    }
}
