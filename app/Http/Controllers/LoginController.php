<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
            return view('login');
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return view('home', $data);
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return view('login');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
