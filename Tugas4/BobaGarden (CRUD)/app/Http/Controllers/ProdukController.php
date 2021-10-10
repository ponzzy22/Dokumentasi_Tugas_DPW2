<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use Illuminate\Support\Str;

class ProdukController extends Controller
{

    function index()
    {
        $data['list_produk'] = produk::all();
        return view('produk.index', $data);
    }

    function create()
    {
        return view('produk.create');
    }

    function store()
    {
        $produk = new Produk;
        $produk -> nama = request('nama');
        $produk -> harga = request('harga');
        $produk -> berat = request('berat');
        $produk -> stok = request('stok');
        $produk -> deskripsi = request('deskripsi');
        $produk -> save();

        return redirect('produk');
    }

    function show(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('produk.show', $data);
        
    }

    function edit(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('produk.edit', $data);  
    }

    function update(Produk $produk)
    {
        $produk -> nama = request('nama');
        $produk -> harga = request('harga');
        $produk -> berat = request('berat');
        $produk -> stok = request('stok');
        $produk -> deskripsi = request('deskripsi');
      
        $produk -> save();

        return redirect('produk');

    }

    function destroy(Produk $produk)
    {
        $produk->delete();

        return redirect('produk');
    }
}
