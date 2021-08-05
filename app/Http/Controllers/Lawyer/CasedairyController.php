<?php

namespace App\Http\Controllers\Lawyer;

use App\Casedairy;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use mysql_xdevapi\Table;

class CasedairyController extends Controller
{
    public function casedairy()
    {
        $id = auth()->id();
        $user = Casedairy::all()->where('lawyer_id', $id);
        $casedairys = $user->where('status', '1');
        return view('lawyer.casedairy.list', compact('casedairys'));
    }

    public function view($c_id)
    {
        $casedairy = Casedairy::findOrFail($c_id);
        return view('lawyer.casedairy.view', compact('casedairy'));
    }

    public function delete($c_id)
    {
        $casedairy = Casedairy::findOrFail($c_id);
        $casedairy->delete();
        return redirect('/casedairy');
    }

    public function create()
    {
        return view('lawyer.casedairy.createdairy');
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

        $values = request(['casetype', 'vname', 'vemail', 'vaddress', 'vnid', 'vphone', 'case_details', 'date', 'vcomment', 'file_1', 'file_2', 'file_3', 'user_id', 'naxt_date']);
        $values['lawyer_id'] = auth()->id();
        $values['status'] = 1;
        if (request()->has('file_1')) {
            $values['file_1'] = request()->file_1->store('uploads', 'public');
        }
        if (request()->has('file_2')) {
            $values['file_2'] = request()->file_2->store('uploads', 'public');
        }
        if (request()->has('file_3')) {
            $values['file_3'] = request()->file_3->store('uploads', 'public');
        }

        Casedairy::create($values);
        return redirect()->to('/casedairy');
    }

    public function edit($c_id)
    {
        $user = Casedairy::findOrFail($c_id);
        return view('lawyer.casedairy.update', compact('user'));
    }

    public function update($c_id)
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
        $values = request(['casetype', 'vname', 'vemail', 'vaddress', 'vnid', 'vphone', 'case_details', 'date', 'vcomment', 'file_1', 'file_2', 'file_3', 'naxt_date', 'status']);

        if (request()->has('file_1')) {
            $values['file_1'] = request()->file_1->store('uploads', 'public');
        }
        if (request()->has('file_2')) {
            $values['file_2'] = request()->file_2->store('uploads', 'public');
        }
        if (request()->has('file_3')) {
            $values['file_3'] = request()->file_3->store('uploads', 'public');
        }

        Casedairy::findOrFail($c_id)->update($values);

        return redirect()->to('/casedairy/' . $c_id);
    }
    public function dismisse($c_id)
    {
        $request=Casedairy::findOrFail($c_id);
        return view('lawyer.casedairy.dismissed',compact('request'));

    }

    public function dissmissed($c_id)
    {
        $request = Casedairy::findOrFail($c_id);

        $this->validate(request(), [
            'status' => 'required'
        ]);
        $request->status = request()->input('status');
        $request->save();

        return redirect()->to('/casedairy/' . $c_id);
    }
}
