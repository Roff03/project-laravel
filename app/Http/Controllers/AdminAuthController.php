<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Models\Admins;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.loginadmin');
    }

    public function login(Request $request)
    {
        // Validasi input dari pengguna
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Email dan password yang akan digunakan untuk login
        $email = 'admin@example.com'; // Ganti dengan email yang sesuai
        $password = 'password123';    // Ganti dengan password yang sesuai

        // Menggunakan email dan password inline
        if (Auth::guard('admin')->attempt([
            'email' => $email,
            'password' => $password,
        ])) {
            return redirect()->intended('admin/dashboard2');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }}
