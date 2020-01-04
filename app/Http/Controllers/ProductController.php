<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Products;
use App\Categories;

class ProductController extends Controller
{
   public function index()
   {
      $product = Products::with('category')->get();
      return view('admin.product.index',\compact('product'));
   }

   public function show()
   {

   }

   public function store(Request $request)
   {
      if($request->hasFile('thunbar')){
         $file = $request->thunbar;
         //Lấy tên file
         $file_name = $file->getClientOriginalName();
         //Lấy loại file
         $file_type = $file->getMimeType();
         //Kích thước file với đơn vị byte
         $file_size = $file->getSize();
         if($file_type == 'image/png' || $file_type == 'image/jpg' || $file_type == 'image/jpeg' || $file_type == 'image/gif'){
             if($file_size <= 1048576){
                 $file_name = date('D-m-yyyy').'-'.rand().'-'.str_slug($file_name);
                 if($file->move('img/upload/product',$file_name))
                 {
                     $data = $request->all();
                     $data = request()->except(['_token']);
                     $data['slug'] = str_slug($request->name);
                     $data['view'] = 0;
                     $data['pay'] = 0;
                     $data['images']="fdgdf";
                     $data['thunbar'] = $file_name;
                     Products::insert($data);
                     return redirect()->route('product.index')->with('success','Đã thêm thành công sản phẩm mới');
                 }
             }else
             {
                 return back()->with('error','Bạn không thể upload ảnh quá 1mb');
             }
         }else
         {
             return back()->with('error','File bạn chọn không là hình ảnh');
         }
     }else
     {
         return back()->with('error','Bạn chưa thêm ảnh minh họa cho sản phẩm');
     }
   }

   public function create()
   {
      $category = Categories::where('parents','!=',0)->get();
      return view('admin.product.add',\compact('category'));
   }

   public function update(Request $request,$id)
   {
        $product = Products::find($id);
        $data = $request->all();
        $data['slug'] = str_slug($request->name);
        if($request->hasFile('thunbar')){
            $file = $request->thunbar;
            //Lấy tên file
            $file_name = $file->getClientOriginalName();
            //Lấy loại file
            $file_type = $file->getMimeType();
            //Kích thước file với đơn vị byte
            $file_size = $file->getSize();
            if($file_type == 'image/png' || $file_type == 'image/jpg' || $file_type == 'image/jpeg' || $file_type == 'image/gif'){
                if($file_size <= 2048576){
                    $file_name = date('D-m-yyyy').'-'.rand().'-'.str_slug($file_name);
                    if($file->move('img/upload/product',$file_name))
                    {
                        $data['thunbar'] = $file_name;
                    }
                }else
                {
                    return back()->with('error','Bạn không thể upload ảnh quá 2mb');
                }
            }else
            {
                return back()->with('error','File bạn chọn không là hình ảnh');
            }
        }else
        {
           $data['thunbar'] = $product->thunbar;
        }
        $product->update($data);
        return \redirect()->route('product.index')->with('success','Update product successfully');
   }

   public function edit($id)
   {
        $product = Products::find($id);
        $category = Categories::where('parents','!=','0')->get();
        return view('admin.product.edit',\compact('product','category'));
   }

   public function destroy(Request $request)
   {
       
   }

   public function deletePro($id)
   {
    Products::find($id)->delete($id);
    return \response()->json(['message'=>'Delete product completed.']);
   }

   public function updateStatus(Request $request)
   {
        $product = Products::findOrFail($request->id);
        $product->status = $request->status;

        $product->save();
        return \response()->json(['message'=>'Change status completed.']);
   }
}
