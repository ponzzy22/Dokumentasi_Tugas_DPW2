<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukResource extends Controller
{
    
    public function index()
    {
        $list_produk = Produk::all();
        return $list_produk->toJson();
    }

    
    public function store()
    {
        if(request('nama') && request('harga') && request('berat') && request('deskripsi') && request('stok')) {
        $produk = new Produk;
        $produk -> nama = request('nama');
        $produk -> harga = request('harga');
        $produk -> berat = request('berat');
        $produk -> deskripsi = request('deskripsi');
        $produk -> stok = request('stok');
        $produk ->save();

        return collect([
            'respond' => 200,
            'data' => $produk
        ]);
        }
        else{
            return collect([
                'respond' => 500,
                'message' => "Field ada yang kosong"
            ]);
        }

    }

    
    public function show($id)
    {
        $produk = Produk::find($id);
        if($produk) {
            return collect([
                'status' => 200,
                'data' => $produk
            ]);
        }
        return collect([
            'respond' => 500,
            'message' => "Produk tidak ditemukan"
        ]);
    }

    
    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        if($produk) {
        $produk -> nama = request('nama') ?? $produk->nama;
        $produk -> harga = request('harga') ?? $produk->harga;
        $produk -> berat = request('berat') ?? $produk->berat;
        $produk -> deskripsi = request('deskripsi') ?? $produk->deskripsi;
        $produk -> stok = request('stok') ?? $produk->stok;
        $produk ->save();

        return collect([
            'respond' => 200,
            'data' => $produk
        ]);
        }
        return collect([
            'respond' => 500,
            'message' => "Produk tidak ditemukan"
        ]);
    }

    
    public function destroy($id)
    {
        $produk = Produk::find($id);
        if($produk) {
            $produk->delete();
            return collect([
                'status' => 200,
                'data' => "Produk berhasil dihapus"
            ]);
        }
        return collect([
            'respond' => 500,
            'message' => "produk tidak ditemukan"
        ]);
    }
}