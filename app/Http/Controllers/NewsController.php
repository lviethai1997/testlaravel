<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use File;
class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('admin.new.index',\compact('news'));
    }

    public function create()
    {
        return view('admin.new.add');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('thunbar')) {
            $file = $request->thunbar;
            //Lấy tên file
            $file_name = $file->getClientOriginalName();
            //Lấy loại file
            $file_type = $file->getMimeType();
            //Kích thước file với đơn vị byte
            $file_size = $file->getSize();
            if ($file_type == 'image/png' || $file_type == 'image/jpg' || $file_type == 'image/jpeg' || $file_type == 'image/gif') {
                if ($file_size <= 2048576) {
                    $file_name = date('D-m-yyyy') . '-' . rand() . '-' . str_slug($file_name);
                    if ($file->move('img/upload/news', $file_name)) {
                        $data = $request->all();
                        $data = request()->except(['_token']);
                        $data['slug'] = str_slug($request->title);
                        $data['thunbar'] = $file_name;
                        $data['users_id'] = 0;
                        News::insert($data);
                        return redirect()->route('new.index')->with('success', 'Đã thêm tin tức mới');
                    }
                } else {
                    return back()->with('error', 'Bạn không thể upload ảnh quá 2mb');
                }
            } else {
                return back()->with('error', 'File bạn chọn không là hình ảnh');
            }
        } else {
            return back()->with('error', 'Bạn chưa thêm ảnh minh họa cho sản phẩm');
        }
    }

    public function show(News $news)
    {
        //
    }

    public function edit($id)
    {
        $new = News::find($id);
        return view('admin.new.edit',\compact('new'));
    }

    public function update(Request $request,$id)
    {
        $new = News::find($id);
        $data = $request->all();
        $data = request()->except(['_token', '_method']);
        $data['slug'] = str_slug($request->title);
        if ($request->hasFile('thunbar')) {
            $file = $request->thunbar;
            //Lấy tên file
            $file_name = $file->getClientOriginalName();
            //Lấy loại file
            $file_type = $file->getMimeType();
            //Kích thước file với đơn vị byte
            $file_size = $file->getSize();
            if ($file_type == 'image/png' || $file_type == 'image/jpg' || $file_type == 'image/jpeg' || $file_type == 'image/gif') {
                if ($file_size <= 2048576) {
                    $file_name = date('D-m-yyyy') . '-' . rand() . '-' . str_slug($file_name);
                    if ($file->move('img/upload/news', $file_name)) {
                        $data['thunbar'] = $file_name;
                        if (File::exists('img/upload/news' . $new->thunbar)) {
                            unlink('img/upload/news' . $new->thunbar);
                        }
                    }
                } else {
                    return back()->with('error', 'Bạn không thể upload ảnh quá 2mb');
                }
            } else {
                return back()->with('error', 'File bạn chọn không là hình ảnh');
            }
        }
        News::where('id', $id)->update($data);
        return \redirect()->route('new.index')->with('success', 'Update news successfully');
    }

    public function destroy($id)
    {
        $new = News::find($id);
        if(File::exists('img/upload/news/'.$new->thunbar)){
            unlink('img/upload/news/'.$new->thunbar);
        }
        $new->delete();
        return \response()->json(['message' => 'Delete news completed.']);
    }

    public function updateStatus(Request $request)
    {
        $new = News::findOrFail($request->id);
        $new->status = $request->status;

        $new->save();
        return \response()->json(['message' => 'Change status completed.']);
    }
}
