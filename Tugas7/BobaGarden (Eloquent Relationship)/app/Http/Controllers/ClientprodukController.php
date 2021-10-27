<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\User;
use App\Http\Controllers\UserController;

class ClientprodukController extends Controller
{

    public function index(Produk $produk)
    {
        $user = request()->user();
        $produk = Produk::latest();

        if(request('search')){
            $produk->where('nama', 'like', '%' . request('search') . '%');
        }

        if(request('harga')){
            $produk->where('harga', 'like', '%' . request('harga') . '%');
        }
        // if(request('hargamax')){
        //     $produk->where('harga', 'like', '%' . request('hargamax') . '%');
        // }
        // if(request('harga')){
        //     $produk->whereBetween('harga', 'between', ['$hargamin, $hargamax']);
        // }


        $data = $produk->orderBy('created_at','desc')->get();
        
        
       
      
        return view('client.index', compact('data'));
    }


    function show(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('produk.show', $data);
        
    }
    
    // function filter()
    // {
    // //     $nama = request('nama');
    // //     $stok = explode(",", request('stok'));
    //     $data['harga_min'] = $harga_min = request('harga_min');
    //     $data['harga_max'] = $harga_max = request('harga_max');

    // //     $data['list_produk'] = Produk::where('nama','like',"%$nama%")->get();
    // //     $data['list_produk'] = Produk::whereIn('stok', $stok)->get();
    //     $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();

    // //     // $data['list_produk'] = Produk::where('stok','<>',$stok)->get();
    // //     // $data['list_produk'] = Produk::whereNotIn('stok', $stok)->get();
    // //     // $data['list_produk'] = Produk::whereNotBetween('harga', [$harga_min, $harga_max])->get();
    // //     // $data['list_produk'] = Produk::whereNotNull('stok')->get();
    // //     // $data['list_produk'] = Produk::whereDate('created_at', '2021-10-19')->get();


    //     // $data['nama'] = $nama;
    //     $data['stok'] = request('stok');

    //     return view('client.index', $data);
    // }
}
