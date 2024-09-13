<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;

class LoginAdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.loginadmin');
    }

    public function loginadmin(Request $request)
    {
        $credentials = $request->only('email','name', 'password');

        // Attempt to authenticate the admin
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        } else {
            Session::flash('error', 'Email or Password is incorrect.');
            return redirect()->route('admin.loginadmin');
        }
    }

    public function logout()
    {
        Auth::guard('User')->logout();
        return redirect('admin.loginadmin');
    }
}

// mengalami perubahan
