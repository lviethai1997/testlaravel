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
            <th>Name</th>
            <th>Category</th>
            <th>Slug</th>
            <th>Price</th>
            <th>Thunbar</th>
            <th>View</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($product as $products)
        <tr>
            
            <td>{{ $products->name }}</td>
            <th>{{ isset($products->category->cate_name) ? $products->category->cate_name : '[N\A]'}}</th>
            <td>{{ $products->slug }}</td>
            <td>{{ $products->price }}</td>
            <td style="text-align:center"><img src="{{asset('img/upload/product')}}{{ '/'.$products->thunbar }}" witdh="100px" height="100px" class="css-class" alt="alt text"></td>
            <td>{{ $products->view }}</td>
            <td>
            <input type="checkbox" data-id="{{ $products->id }}" name="status" class="js-switch" {{ $products->status == 1 ? 'checked' : '' }}>
            </td>
            <td>
                <a class="btn btn-info" href="{{ route('product.show',$products->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('product.edit',$products->id) }}">Edit</a>
                <button type="button" data-id="{{ $products->id }}" id="deleteproduct"   class="btn btn-danger deleteproduct">Delete</button>
            </td>
        </tr>
        @endforeach
    </table>
  <script>
        $(".deleteproduct").click(function(){
            let proId = $(this).data('id');
            let $ele = $(this).parent().parent();
            if (confirm("Are you sure about this ?")) {
            $.ajax({
                type:"GET",
                url: '/product/delete/'+ proId,
                data: { 'id': proId },
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