@extends('admin.layouts.master')
@section('title')
Quản lý Products
@endsection
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('product.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Price</th>
            <th>Thunbar</th>
            <th>View</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($product as $products)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $products->name }}</td>
            <td>{{ $products->slug }}</td>
            <td>{{ $products->price }}</td>
            <td style="text-align:center"><img src="{{asset('img/upload/product')}}{{ '/'.$products->thunbar }}" witdh="100px" height="100px" class="css-class" alt="alt text"></td>
            <td>{{ $products->view }}</td>
            <td>
            <input type="checkbox" data-id="{{ $products->id }}" name="status" class="js-switch" {{ $products->status == 1 ? 'checked' : '' }}>
            </td>
            <td>
                <form action="{{ route('product.destroy',$products->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('product.show',$products->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('product.edit',$products->id) }}">Edit</a>
   
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
                let proId = $(this).data('id');
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '{{ route('product.update.status') }}',
                    data: {'status': status, 'id': proId},
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