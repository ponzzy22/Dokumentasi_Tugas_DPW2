<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function showLogin() {
        return view('login');
    }

    function loginProcess() {
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            if($user->level == 1) return redirect('produk/penjual');
            if($user->level == 0) return redirect('produk/pembeli');
        }else{
            return back();
        }
        // if(request('login_as') == 1 ) {
        //     if(Auth::guard('pembeli')->attempt(['email' => request('email'), 'password' => request('password')])) {
        //         return redirect('produk/pembeli');
        //     }else{
        //         return back();
        //     }
        // }else{
        //     if(Auth::guard('penjual')->attempt(['email' => request('email'), 'password' => request('password')])) {
        //         return redirect('produk/penjual');
        //     }else{
        //         return back();
        //     }
        // }
    }

    function logout() {
        Auth::logout();
        Auth::guard('pembeli')->logout();
        Auth::guard('penjual')->logout();
        return redirect('login');
    }
}
