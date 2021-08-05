<?php

namespace App\Http\Controllers\Authentication;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('/login');
    }

    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->with('error','Sorry, wrong credentials');
        }
        if (Auth::user()->usertype == '1') {
            return redirect()->to('/user');
        }
        if (Auth::user()->usertype == '2') {

            auth()->logout();
            return redirect()->to('/deactiveuser');
        }
        if (Auth::user()->usertype == '3') {
            return redirect()->to('/lawyer');
        }
        return redirect()->to('/admin');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->to('/');
    }
}

