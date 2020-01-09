@extends('admin.layouts.master')

@section('title')
    Cập nhật tin tức
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">update New</h3>
            </div>
            @if ($message = Session::get('error'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <!--Input Size-->
            <!--===================================================-->
            <form action="{{ route('new.update',$new->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
                <div class="panel-body">
                    <div class="form-group">
                        <label style="font-weight:bold;font-size:18px;color:black;" class="col-sm-3 control-label" for="demo-is-inputsmall">Tiêu đề</label>
                        <div class="col-lg-6">
                            <input type="text" required  name="title" value="{{ $new->title }}"  placeholder="Nhập tiêu đề" class="form-control input-sm" id="demo-is-inputsmall">
                            @if ($errors->has('title'))
                            <div class="aler alert-danger">{{ $errors->first('title')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-weight:bold;font-size:18px;color:black;" for="demo-is-inputnormal" class="col-sm-3 control-label">Mini Content</label>
                        <div class="col-sm-6">
                            <input type="text" required  name="minicontent" value="{{ $new->minicontent }}" placeholder="Nhập giá mua" class="form-control" id="demo-is-inputnormal">
                            @if ($errors->has('minicontent'))
                            <div class="aler alert-danger">{{ $errors->first('minicontent')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-weight:bold;font-size:18px;color:black;" for="demo-is-inputnormal" class="col-sm-3 control-label">Chọn hình đại diện</label>
                        <div class="col-sm-6">
                        <input name="thunbar" type="file" class="form-control" name="thunbar"  class="form-control input-sm" id="demo-is-inputsmall" accept="image/*" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])">
                        <img id="image" src="{{asset('img/upload/news')}}{{ '/'.$new->thunbar }}" width="200" height="200">
                            @if ($errors->has('thunbar'))
                            <div class="aler alert-danger">{{ $errors->first('thunbar')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-weight:bold;font-size:18px;color:black;" for="demo-is-inputnormal" class="col-sm-3 control-label">Nội dung</label>
                        <div class="col-sm-12">
                        <textarea  required id="txtContent" class="form-control" name="content" class="form-control input-sm" >{{$new->content}}</textarea>
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