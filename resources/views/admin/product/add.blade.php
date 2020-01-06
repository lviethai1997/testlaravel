@extends('admin.layouts.master')

@section('title')
    Thêm mới Product
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Add Product</h3>
            </div>
            @if ($message = Session::get('error'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <!--Input Size-->
            <!--===================================================-->
            <form action="{{ route('product.store') }}" method="POST" class="form-horizontal" enctype="multipart/form-data" >
            @csrf
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="demo-is-inputsmall">Tên sản phẩm</label>
                        <div class="col-sm-6">
                            <input type="text" required  name="name" placeholder="Nhập tên sản phẩm" class="form-control input-sm" id="demo-is-inputsmall">
                            @if ($errors->has('name'))
                            <div class="aler alert-danger">{{ $errors->first('name')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="demo-is-inputnormal" class="col-sm-3 control-label">Giá mua</label>
                        <div class="col-sm-6">
                            <input type="text" required  name="price_input" placeholder="Nhập giá mua" class="form-control" id="demo-is-inputnormal">
                            @if ($errors->has('price_input'))
                            <div class="aler alert-danger">{{ $errors->first('price_input')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="demo-is-inputnormal" class="col-sm-3 control-label">Giá bán</label>
                        <div class="col-sm-6">
                            <input type="text" required  name="price" placeholder="Nhập giá bán" class="form-control" id="demo-is-inputnormal">
                            @if ($errors->has('price'))
                            <div class="aler alert-danger">{{ $errors->first('price')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="demo-is-inputnormal" class="col-sm-3 control-label">Giảm giá</label>
                        <div class="col-sm-6">
                            <input type="text" required  name="sale" placeholder="Nhập giảm giá" class="form-control" id="demo-is-inputnormal">
                            @if ($errors->has('sale'))
                            <div class="aler alert-danger">{{ $errors->first('sale')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="demo-is-inputnormal" class="col-sm-3 control-label">Chọn danh mục sản phẩm</label>
                        <div class="col-sm-6">
                            <select name="category_id" class="form-control input-sm" id="demo-is-inputsmall">
                            @if(isset($category))
                            @foreach($category as $cate)
                            <option value="{{ $cate->id }}">{{ $cate->cate_name }}</option>
                            @endforeach
                            @else
                            <option value="0">parent</option>
                            @endif
                            </select>
                        @if ($errors->has('parents'))
                            <div class="aler alert-danger">{{ $errors->first('parents')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="demo-is-inputnormal" class="col-sm-3 control-label">Chọn hình đại diện</label>
                        <div class="col-sm-6">
                        <input name="thunbar" type="file" class="form-control" name="thunbar" class="form-control input-sm" id="demo-is-inputsmall" accept="image/*" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])">
                        <img id="image" src="" width="200" height="200">
                            @if ($errors->has('thunbar'))
                            <div class="aler alert-danger">{{ $errors->first('thunbar')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="demo-is-inputnormal" class="col-sm-3 control-label">Mô tả sản phẩm</label>
                        <div class="col-sm-6">
                        <textarea  required id="editor1"  class="form-control" name="description" class="form-control input-sm" ></textarea>
                        @if ($errors->has('description'))
                            <div class="aler alert-danger">{{ $errors->first('description')}}</div>
                        @endif
                        <script> CKEDITOR.replace('editor1'); </script>
                        </div>
                    </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-3" style="padding-top:10px">
                            <button class="btn btn-info btn-labeled fa fa-user fa-lg" type="submit">Thêm Mới</button>
                            <!-- <a type="button" href="{{ route('user.index') }}" class="btn btn-warning btn-labeled fa fa-repeat fa-lg" type="reset">Hủy Bỏ</a> -->
                        </div>
                    </div>
                </div>
            </form>
            <!--===================================================-->
            <!--End Input Size-->
        </div>
    </div>
</div>

@endsection