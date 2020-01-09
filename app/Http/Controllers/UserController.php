<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = Users::All();
        return view('admin.user.index', compact('user'));
    }

    public function show()
    {

    }

    //get
    public function create()
    {
        return view('admin.user.add');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data = $request->except('_method', '_token');
        $data['password'] = bcrypt($request->password);
        $data['status'] = '0';
        Users::where('id', '=', $id)->update($data);
        return redirect()->route('user.index')->with('success', 'Product update successfully.');

    }

    public function edit($id)
    {
        $user = Users::find($id);
        return view('admin.user.edit', \compact('user'));
    }

    public function destroy($id)
    {
        $user = Users::find($id);
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Product delete successfully.');
    }
    //post
    public function store(Request $request)
    {
        $data = $request->all();
        $data = request()->except(['_token']);
        $data['status'] = '0';
        $data['password'] = bcrypt($request->password);
        Users::insert($data);
        return redirect()->route('user.index')->with('success', 'Product created successfully.');
    }

    public function updateStatus(Request $request)
    {
        $user = Users::findOrfail($request->id);
        $user->status = $request->status;
        $user->save();
        return \response()->json(['message' => 'Change status completed']);
    }
}
