@extends('admin.layouts.master')
@section('title')
Quản lý Users
@endsection
@section('content')
<!-- <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('user.create') }}"> Create New Product</a>
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
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>User Name</th>
            <th>Address</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($user as $users)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>{{ $users->phone }}</td>
            <td>{{ $users->username }}</td>
            <td>{{ $users->address }}</td>
            <td>
            <input type="checkbox" data-id="{{ $users->id }}" name="status" class="js-switch" {{ $users->status == 1 ? 'checked' : '' }}>
            </td>
            <td style="text-align:center">
                <form action="{{ route('user.destroy',$users->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('user.create') }}">Create</a>
    
                    <a class="btn btn-primary" href="{{ route('user.edit',$users->id) }}">Edit</a>
   
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
                let usrId = $(this).data('id');
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '{{ route('user.update.status') }}',
                    data: {'status': status, 'id': usrId},
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