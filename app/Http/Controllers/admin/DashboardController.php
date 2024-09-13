<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller; // Make sure this line is present
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Ensure the User model is imported
use Illuminate\Http\Request;

class DashboardController extends Controller {
    public function index()
    // {
    //     if (Auth::guard('admin')->check()) {
    //         return redirect()->route('admin.dashboard');
    //     }
    //  else{   return view('admin.loginadmin');}

    // }
    {
        return view('admin.coba');
    }

}
