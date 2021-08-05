<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all()->where('usertype', '1')->count();
        $lawyers = User::all()->where('usertype', '3')->count();
        $requests = User::all()->where('usertype', '2')->count();
        return view('admin.index', compact('users', 'lawyers', 'requests'));
    }
}
