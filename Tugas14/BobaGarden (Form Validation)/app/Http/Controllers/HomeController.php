<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        return view('v_home');
    }

    
    public function v_home()
    {
        return view('v_home');
    }

    public function user()
    {
        return view('v_user');
    }
    public function v_user()
    {
        return view('v_user');
    }

    public function cost()
    {
        return view('v_cost');
    }
    public function v_cost()
    {
        return view('v_cost');
    }

    public function produk()
    {
        return view('v_produk');
    }
    public function v_produk()
    {
        return view('v_produk');
    }

    public function keranjang()
    {
        return view('v_keranjang');
    }
    public function v_keranjang()
    {
        return view('v_keranjang');
    }
    
    public function peta()
    {
        return view('v_peta');
    }
    public function v_peta()
    {
        return view('v_peta');
    }

    public function notiv()
    {
        return view('v_notiv');
    }
    public function v_notiv()
    {
        return view('v_notiv');
    }

    function testAjax(){
        $data['list_provinsi'] = Provinsi::all();
        return view('test-ajax', $data);
    }
}
