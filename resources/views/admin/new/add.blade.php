@extends('admin.layouts.master')

@section('title')
    Thêm mới News
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Add New</h3>
            </div>
            @if ($message = Session::get('error'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <!--Input Size-->
            <!--===================================================-->
            <form action="{{ route('new.store') }}" method="POST" class="form-horizontal" enctype="multipart/form-data" >
            @csrf
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="demo-is-inputsmall">Tiêu đề</label>
                        <div class="col-sm-6">
                            <input type="text" required  name="title" placeholder="Nhập tiêu đề" class="form-control input-sm" id="demo-is-inputsmall">
                            @if ($errors->has('title'))
                            <div class="aler alert-danger">{{ $errors->first('title')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="demo-is-inputnormal" class="col-sm-3 control-label">Mini Content</label>
                        <div class="col-sm-6">
                            <input type="text" required  name="minicontent" placeholder="Nhập giá mua" class="form-control" id="demo-is-inputnormal">
                            @if ($errors->has('minicontent'))
                            <div class="aler alert-danger">{{ $errors->first('minicontent')}}</div>
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
                        <textarea  required id="txtContent"  class="form-control" name="content" class="form-control input-sm" ></textarea>
                        @if ($errors->has('content'))
                            <div class="aler alert-danger">{{ $errors->first('content')}}</div>
                        @endif
                        </div>
                    </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-3" style="padding-top:10px">
                            <button class="btn btn-info btn-labeled fa fa-user fa-lg" type="submit">Thêm Mới</button>
                            <button class="btn btn-warning btn-labeled fa fa-user fa-lg" type="reset">Reset</button>
                            <button onclick="location.href='{{ route('new.index') }}'" class="btn btn-danger btn-labeled fa fa-repeat fa-lg" type="reset">Hủy Bỏ</button>
                        </div>
                    </div>
                </div>
            </form>
            <!--===================================================-->
            <!--End Input Size-->
        </div>
    </div>
</div>
<script>
CKEDITOR.replace( 'content' );
</script>
@endsection