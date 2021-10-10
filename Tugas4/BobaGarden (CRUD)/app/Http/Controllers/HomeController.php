<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    
    public function showlogin()
    {
        return view('login');
    }
    public function showreg()
    {
        return view('registrasi');
    }
    public function showkat()
    {
        return view('kategori');
    }
}
