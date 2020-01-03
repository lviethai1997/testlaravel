@extends('admin.layouts.master')

@section('title')
    Cập nhật category
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Update category</h3>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!--Input Size-->
            <!--===================================================-->
            <form action="{{ route('category.update',$category->id) }}" method="POST" class="form-horizontal"  >
            @csrf
            @method('PUT')
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="demo-is-inputsmall">Tên danh mục sản phẩm</label>
                        <div class="col-sm-6">
                            <input type="text" required  value="{{ $category->name }}" name="name" placeholder="Nhập tên danh mục sản phẩm" class="form-control input-sm" id="demo-is-inputsmall">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="demo-is-inputsmall">parents</label>
                        <div class="col-sm-6">
                            <select name="parents" class="form-control input-sm" id="demo-is-inputsmall">
                            @if(isset($danhmuc))
                            @foreach($danhmuc as $cate)
                            <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                            @endforeach
                            @else
                            <option value="0"></option>
                            @endif
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="demo-is-inputsmall">Sale Category</label>
                        <div class="col-sm-6">
                            <input type="text" required  name="salecate" value="{{ $category->salecate }}" placeholder="Sale Category" class="form-control input-sm" id="demo-is-inputsmall">
                        </div>
                    </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-3" style="padding-top:10px">
                            <button class="btn btn-info btn-labeled fa fa-user fa-lg" type="submit">Cập nhật</button>
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