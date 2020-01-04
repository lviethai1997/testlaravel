@extends('admin.layouts.master')
@section('title')
Quản lý Categories
@endsection
@section('content')
<!-- <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('category.create') }}"> Create New category</a>
            </div>
        </div>
    </div> -->
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>slug</th>
            <th>parents</th>
            <th>SaleCate</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($category as $cate)
        <tr>
            <td>{{ $cate->cate_name }}</td>
            <td>{{ $cate->slug }}</td>
            <td>{{ $cate->parents }}</td>
            <td>{{ $cate->salecate }}</td>
            <td>
            <input type="checkbox" data-id="{{ $cate->id }}" name="status" class="js-switch" {{ $cate->status == 1 ? 'checked' : '' }}>
            </td>

            <td>
            <a class="btn btn-info" href="{{ route('category.create') }}">Create</a>

            <a class="btn btn-primary" href="{{ route('category.edit',$cate->id) }}">Edit</a>

            <button type="button" data-id="{{ $cate->id }}" class="btn btn-danger deletecate">Delete</button>
            </td>
        </tr>
        @endforeach
</table>
    <script>
         $(".deletecate").click(function(){
        let usrId = $(this).data('id');
        let $ele = $(this).parent().parent();
        if (confirm("Are you sure about this ?")) {
        $.ajax({
            type:"GET",
            url: '/category/delete/'+ usrId,
            data: { 'id': usrId },
            success: function(data){
                $ele.fadeOut().remove();
                toastr.options.closeButton = true;
                toastr.options.closeMethod = 'fadeOut';
                toastr.options.closeDuration = 100;
                toastr.success(data.message);
            }
        });
        }
        return false;
    });
        $(document).ready(function(){
            $('.js-switch').change(function () {
                let status = $(this).prop('checked') === true ? 1 : 0;
                let cateId = $(this).data('id');
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '{{ route('category.update.status') }}',
                    data: {'status': status, 'id': cateId},
                    success: function (data) {
                        toastr.options.closeButton = true;
                        toastr.options.closeMethod = 'fadeOut';
                        toastr.options.closeDuration = 100;
                        toastr.success(data.message);
                    }
                });
            });
        });
    </script>
@stop
