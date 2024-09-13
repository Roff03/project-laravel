<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view ('about');
    }
    public function home()
    {
        return view ('login');
    }

    public function chart()
    {
        return view('components.chart');
    }

    public function dashboard()
    {
        return view ('admin.dashboard');
    }

    public function pesan()
    {
        return view ('components.pesan');
    }

    public function master()
    {
        return view('master');
    }
}

