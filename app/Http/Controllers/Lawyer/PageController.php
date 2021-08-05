<?php

namespace App\Http\Controllers\Lawyer;

use App\Casedairy;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('lawyer.index');
    }

    public function request()
    {
        $id = auth()->id();
        $user = Casedairy::all()->where('lawyer_id', $id);
        $applications = $user-> where('status', '2');
        return view('lawyer.casedairy.requestlist', compact('applications'));
    }

    public function caseview($c_id)
    {
        $request=Casedairy::findOrFail($c_id);
        return view('lawyer.casedairy.request', compact('request'));
    }

    public function accept($c_id)
    {
        $request=Casedairy::findOrFail($c_id);
        return view('lawyer.casedairy.accept',compact('request'));
    }

    public function update($c_id)
    {
        $request = Casedairy::findOrFail($c_id);

        $this->validate(request(), [
            'status' => 'required'
        ]);
        $request->status = request()->input('status');
        $request->save();

        return redirect('caserequest');
    }


    public function delete($c_id)
    {
        $application = Casedairy::findOrFail($c_id);
        $application->delete();
        return redirect('/caserequest');
    }

    public function cliendlist()
    {
        $id = auth()->id();
        $lawyer= Casedairy::all()->where('lawyer_id', $id);
        $cliends= $lawyer-> where('status', '1');
        return view('lawyer.cliend.cliendlist', compact('cliends'));
    }

    public function cliendview($cliend_id)
    {
        $user = User::findOrFail($cliend_id);
        return view('lawyer.cliend.view',compact('user'));
    }

    public function dissmissedlist()
    {
        $id = auth()->id();
        $user = Casedairy::all()->where('lawyer_id', $id);
        $casedairys = $user->where('status', '3');
        return view('lawyer.casedairy.dismissedlist', compact('casedairys'));
    }

    public function dissmissedview($c_id)
    {
        $casedairy = Casedairy::findOrFail($c_id);
        return view('lawyer.casedairy.dissmissedview', compact('casedairy'));
    }

    public function system_feedback()
    {
        $id = auth()->id();
        $user=User::all()->where('id',$id);
        return view('lawyer.feedback',compact('user'));

    }

    public function feedback()
    {
        $id = auth()->id();
        $this->validate(request(), [
            'feedback' => 'required'

        ]);
        $values=request(['feedback']);
        $user=User::findOrFail($id);
        $user-> update($values);
        dd($user);

        return redirect('/lawyer');

    }

    public function profile()
    {
        $id= auth()->id();
        $user= User::findOrFail($id);
        return view('user.profile',compact('user'));
    }


}
