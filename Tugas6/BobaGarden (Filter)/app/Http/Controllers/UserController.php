<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Models\User;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
        $data['list_user'] = User::all();
        return view('user.index', $data);
    }
    
    function show(user $user)
    {
        $data['user'] = $user;
        return view('user.show', $data);
    }

    function edit(user $user)
    {
        $data['user'] = $user;
        return view('user.edit', $data);  
    }

    function destroy(User $user)
    {
        $user->delete();

        return redirect('user');
    }

  
}
