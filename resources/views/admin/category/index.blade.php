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
            <td>{{ $cate->name }}</td>
            <td>{{ $cate->slug }}</td>
            <td>{{ $cate->parents }}</td>
            <td>{{ $cate->salecate }}</td>
            <td>
            <input type="checkbox" data-id="{{ $cate->id }}" name="status" class="js-switch" {{ $cate->status == 1 ? 'checked' : '' }}>
            </td>

            <td>
                <form action="{{ route('category.destroy',$cate->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('category.create') }}">Create</a>
    
                    <a class="btn btn-primary" href="{{ route('category.edit',$cate->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
</table>
    <script>
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
