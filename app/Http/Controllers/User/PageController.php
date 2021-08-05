<?php

namespace App\Http\Controllers\User;
//namespace App\Http\Controllers\Casedairy;

use App\Casedairy;
use App\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function home()
    {
        $id = auth()->id();
        $application = Casedairy::all()->where('user_id', $id)->count($id);
        return view('user.index', compact('application'));
    }

    public function index()
    {
        $users = User::all()->where('usertype', '3');
        return view('user.lawyer.list', compact('users'));
    }

    public function show($user_id)
    {
        $user = User::findOrFail($user_id);
        return view('user.lawyer.infoview', compact('user'));
    }

    public function application($user_id)
    {
        $user = User::findOrFail($user_id);
        return view('user.applictation.from', compact('user'));
    }

    public function applicationlist()
    {
        $id = auth()->id();
        $applications = Casedairy::all()->where('user_id', $id);
        return view('user.applictation.applicationlist', compact('applications'));
    }

    public function aview($a_id)
    {
        $application = Casedairy::findOrFail($a_id);
        return view('user.applictation.view', compact('application'));
    }

    public function destroy($a_id)
    {
        $application = Casedairy::findOrFail($a_id);
        $application->delete();
        return redirect('/applicationlist');
    }


    public function store()
    {
        $this->validate(request(), [
            'casetype' => 'required',
            'vname' => 'required',
            'vemail' => 'required',
            'vaddress' => 'required',
            'vnid' => 'required',
            'vphone' => 'required',
            'case_details' => 'required',
            'date' => 'required',
            'vcomment' => 'required',
            'file_1' => 'file|mimes:JPEG,jpeg,PNG,png,jpg,gif,svg|max:5000000',
            'file_2' => '',
            'file_3' => '',
            'userid' => '',
            'lawyerid' => '',
            'naxt_date' => '',
            'status' => '',
        ]);

        $values = request(['casetype', 'vname', 'vemail', 'vaddress', 'vnid', 'vphone', 'case_details', 'date', 'vcomment', 'file_1', 'file_2', 'file_3', 'lawyer_id', 'naxt_date']);
        $values['user_id'] = auth()->id();
        $values['status'] = 2;
        if (request()->has('file_1')) {
            $values['file_1'] = request()->file_1->store('uploads', 'public');
        }

        Casedairy::create($values);
        return redirect()->to('/user');
    }

    public function profile()
    {
        $id= auth()->id();
        $user= User::findOrFail($id);
        return view('user.profile',compact('user'));


    }

}
