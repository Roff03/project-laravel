<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session; // Tambahkan ini
use App\Models\User;

class RegisterController extends Controller
{
    // Menampilkan halaman register
    public function register()
    {
        return view('register');
    }

    // Menangani aksi register
    public function actionregister(Request $request)
    {
       
        // Membuat user baru
        User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'active' => 1
        ]);

        // Mengatur pesan flash session
        Session::flash('message', 'Register Berhasil. Akun Anda sudah Aktif silahkan Login menggunakan username dan password.');

        // Redirect ke halaman register
        return redirect()->route('register'); // Pastikan 'register' adalah nama rute yang benar
    }
}
