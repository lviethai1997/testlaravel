<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Categories::all();
        return view('admin.category.index', \compact('category'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data = request()->except(['_token']);
        $data['slug'] = str_slug($request->cate_name);
        Categories::insert($data);
        return \redirect()->route('category.index')->with('success', 'add category successfuly');
    }

    public function create()
    {
        $category = Categories::where('status', '0')->get();
        return view('admin.category.add', \compact('category'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data = request()->except(['_token', '_method']);
        $data['slug'] = str_slug($request->cate_name);
        Categories::where('id', $id)->update($data);
        return redirect()->route('category.index')->with('success', 'update category successfuly');
    }

    public function edit($id)
    {
        $category = Categories::find($id);
        $danhmuc = Categories::where('parents', '!=', '0')->get();
        return view('admin.category.edit', \compact('category', 'danhmuc'));
    }

    public function destroy($id)
    {
        $category = Categories::find($id);
        $category->delete();
        return \redirect()->route('category.index')->with('success', 'delete category complete');
    }

    public function show()
    {

    }

    public function updateStatus(Request $request)
    {
        $category = Categories::findOrFail($request->id);
        $category->status = $request->status;
        $category->save();

        return \response()->json(['message' => 'Change status completed.']);
    }
}
