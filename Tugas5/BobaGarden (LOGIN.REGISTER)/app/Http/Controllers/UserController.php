<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
