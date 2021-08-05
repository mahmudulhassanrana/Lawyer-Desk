<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
//        $users=User::all();
        $users = User::all()->where('usertype', '1');
        return view('admin.user', compact('users'));
    }

    public function show($user_id)
    {
        $user = User::findOrFail($user_id);
        return view('admin.user.show', compact('user'));
    }

    public function destroy($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->delete();
        return redirect('adminuser');
    }
}
