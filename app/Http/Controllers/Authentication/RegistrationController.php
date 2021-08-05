<?php

namespace App\Http\Controllers\Authentication;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registation');
    }
    public function store()
    {
        $this->validate(request(), [
            'usertype'=>'required',
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'address' => 'required',
            'nid' => 'required',
            'bar_id' => '',
            'phone' => 'required',
            'password' => 'required|confirmed'
        ]);

        $user = User::create(request(['usertype','name', 'email','address','nid','bar_id','phone', 'password']));

        return redirect()->to('/login');
    }
}
