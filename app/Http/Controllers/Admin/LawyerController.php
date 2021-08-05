<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LawyerController extends Controller
{
    public function index()
    {
        $users = User::all()->where('usertype', '3');
        return view('admin.lawyer', compact('users'));
    }

    public function show($user_id)
    {
        $user = User::findOrFail($user_id);
        return view('admin.lawyer.show', compact('user'));
    }

    public function destroy($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->delete();
        return redirect('adminuser');
    }

    public function view()
    {
        $users = User::all()->where('usertype', '2');
        return view('admin.lawyer.requestlist', compact('users'));
    }

    public function edit($user_id)
    {
        $user = User::findOrFail($user_id);
        return view('admin.lawyer.request', compact('user'));

    }

    public function update($user_id)
    {
        $user = User::findOrFail($user_id);

        $this->validate(request(), [
            'usertype' => 'required'
        ]);
        $user->usertype = request()->input('usertype');
        $user->save();

        return redirect('lawyerrequest');

    }
}
