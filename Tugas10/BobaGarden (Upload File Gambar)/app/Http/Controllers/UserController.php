<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetail;
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
        $data['list_user'] = User::withCount('produk')->get();
        return view('user.index', $data);
    }

    function create()
    {
        return view('user.create');
    }
    
    function store()
    {
        $user = new User;
        $user -> name = request('name');
        $user -> email = request('email');
        $user -> password = request('password');
        $user -> save();

        $userDetail = new UserDetail();
        $userDetail -> id_user = $user->id;
        $userDetail -> no_handphone = request('no_handphone');
        $userDetail -> save();


        return redirect('user');
    }

    function show(user $user, userDetail $userDetail)
    {
        $data['user'] = $user;
        $data['userDetail'] = $userDetail;

        return view('user.show', $data);
    }

    function edit(user $user, userDetail $userDetail)
    {
        $data['user'] = $user;
        $data['userDetail'] = $userDetail;

        return view('user.edit', $data);  
    }

    function update(User $user, userDetail $userDetail)
    {
        $user -> name = request('name');
        $user -> email = request('email');
        $user -> password = request('password');
        $user -> save();

        $userDetail -> id_user = $user->id;
        $userDetail -> no_handphone = request('no_handphone');
        $userDetail -> save();

        return redirect('user');

    }

    function destroy(User $user)
    {
        $user->delete();

        return redirect('user');
    }

  
}
