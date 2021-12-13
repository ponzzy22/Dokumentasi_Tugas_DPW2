<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;

class ClientprodukController extends Controller
{
    public function index(Produk $produk)
    {
        $data = $produk->orderBy('created_at','desc')->get();
        return view('client.index', compact('data'));
    }


    function show(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('produk.show', $data);
        
    }
    
}
