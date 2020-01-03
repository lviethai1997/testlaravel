@extends('admin.layouts.master')

@section('title')
    Cập nhật User
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Update User</h3>
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
            <form action="{{ route('user.update',$user->id) }}" method="POST" class="form-horizontal"  >
            @csrf
            @method('PUT')
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="demo-is-inputsmall">Họ và tên</label>
                        <div class="col-sm-6">
                            <input type="text" required  value="{{ $user->name }}" name="name" placeholder="Nhập họ và tên" class="form-control input-sm" id="demo-is-inputsmall">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="demo-is-inputnormal" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-6">
                            <input type="text" required  value="{{ $user->email }}" name="email" placeholder="Nhập Email" class="form-control" id="demo-is-inputnormal">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="demo-is-inputnormal" class="col-sm-3 control-label">Số điện Thoại</label>
                        <div class="col-sm-6">
                            <input type="text" required  value="{{ $user->phone }}" name="phone" placeholder="Nhập số điện thoại" class="form-control" id="demo-is-inputnormal">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="demo-is-inputnormal" class="col-sm-3 control-label">Tên đăng nhập</label>
                        <div class="col-sm-6">
                            <input type="text" required  value="{{ $user->username }}" name="username" placeholder="Nhập tên đăng nhập" class="form-control" id="demo-is-inputnormal">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="demo-is-inputnormal" class="col-sm-3 control-label">Mật khẩu</label>
                        <div class="col-sm-6">
                            <input type="password" required  value="{{ $user->password }}" name="password" placeholder="Nhập mật khẩu" class="form-control" id="demo-is-inputnormal">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="demo-is-inputnormal" class="col-sm-3 control-label">Địa chỉ nhà</label>
                        <div class="col-sm-6">
                            <input type="textarea" required  value="{{ $user->address }}" name="address" placeholder="Nhập địa chỉ nhà" class="form-control" id="demo-is-inputnormal">
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <div class="input-group-btn" style="left:280px">
                                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button" aria-expanded="false">Action <i class="dropdown-caret fa fa-caret-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                    </div> -->
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