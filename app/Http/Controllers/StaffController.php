<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function home() {
        return view('home');
	}

    public function list() {
        $staffs = Staff::all();
        return view('list', compact('staffs'));
    }

    public function create() {
		return view('create');
	}

    public function store(Request $request)
    {
        $message = array(
            'name.required' => 'Please staff Full Name',
            'name.min' => 'Please enter 5 until 50 characters',
            'name.max' => 'Please enter 5 until 50 characters',
            'sid.required' => 'Please enter Staff Is',
            'position.required' => 'Please enter staff position',

        );

            $request->validate([
                'name' => 'required|min:5|max:50',
                'sid' => 'required',
                'position' => 'required',
                ],$message);


        Staff::create([
            'name' => $request->name,
            'sid' => $request->sid,
            'position' => $request->position
        ]);
        return redirect('/');
    }

    public function edit($id)
    {
        $staff = Staff::find($id);
        return view('edit', compact('staff'));
    }

    public function update(Request $request, $id)
    {
        Staff::where('id', $id)
            ->update([
                'name' => $request->name,
                'sid' => $request->sid,
                'position' => $request->position
            ]);

        return redirect('/list');
    }

    public function destroy($id)
    {
        Staff::destroy($id);
        return redirect('/');
    }
}
