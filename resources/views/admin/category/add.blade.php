@extends('admin.layouts.master')

@section('title')
    Thêm mới category
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Add Category</h3>
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
            <form action="{{ route('category.store') }}" method="POST" class="form-horizontal"  >
            @csrf
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="demo-is-inputsmall">Tên danh mục sản phẩm</label>
                        <div class="col-sm-6">
                            <input type="text" required  name="cate_name" placeholder="Nhập tên danh mục sản phẩm" class="form-control input-sm" id="demo-is-inputsmall">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="demo-is-inputsmall">parents</label>
                        <div class="col-sm-6">
                            <select name="parents" class="form-control input-sm" id="demo-is-inputsmall">
                            <option value="0" selected>parent </option>
                            @if(isset($category))
                            @foreach($category as $cate)
                            <option value="{{ $cate->id }}">{{ $cate->cate_name }}</option>
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
                            <input type="text" required  name="salecate" value='0' placeholder="Sale Category" class="form-control input-sm" id="demo-is-inputsmall">
                        </div>
                    </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-3" style="padding-top:10px">
                            <button class="btn btn-info btn-labeled fa fa-user fa-lg" type="submit">Thêm Mới</button>
                            <button class="btn btn-warning btn-labeled fa fa-user fa-lg" type="reset">Reset</button>
                            <button onclick="location.href='{{ route('category.index') }}'" class="btn btn-danger btn-labeled fa fa-repeat fa-lg" type="reset">Hủy Bỏ</button>
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