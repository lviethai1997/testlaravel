@extends('admin.layouts.master')
@section('title')
Quản lý Products
@endsection
@section('content')
<!-- <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('product.create') }}"> Create New Product</a>
            </div>
        </div>
    </div> -->
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Product management</h3>
    </div>
    <div class="panel-body">
        <div id="demo-dt-basic_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
            <div class="row">
                <div class="col-sm-12">
                    <table id="demo-dt-basic" class="table table-striped table-bordered dataTable no-footer dtr-inline collapsed" cellspacing="0" width="100%" role="grid" aria-describedby="demo-dt-basic_info" style="width: 100%;">
                        <thead>
                            <tr role="row">
                            <th class="sorting" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 30px;">ID</th>
                                <th class="sorting" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px;">Name</th>
                                <th class="min-tablet sorting" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px;">Category</th>
                                <th class="min-tablet sorting" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Extn.: activate to sort column ascending" style="width: 50px;">Slug</th>
                                <th class="min-tablet sorting" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Extn.: activate to sort column ascending" style="width: 50px;">Price</th>
                                <th class="min-tablet sorting" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Extn.: activate to sort column ascending" style="width: 50px;">Thunbar</th>
                                <th class="min-tablet sorting" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Extn.: activate to sort column ascending" style="width: 30px;">View</th>
                                <th class="min-tablet sorting" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Extn.: activate to sort column ascending" style="width: 30px;">Status</th>
                                <th class="min-tablet sorting" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Extn.: activate to sort column ascending" style="width: 200px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($product as $products)
                            <tr>
                                <td style="text-align:center">{{ $products->id }}</td>
                                <td style="text-align:center ">{{ $products->name }}</td>
                                <th style="text-align:center ">{{ isset($products->category->cate_name) ? $products->category->cate_name : '[N\A]'}}</th>
                                <td style="text-align:center ">{{ $products->slug }}</td>
                                <td style="text-align:center ">{{ $products->price }}</td>
                                <td style="text-align:center "><img src="{{asset('img/upload/product')}}{{ '/'.$products->thunbar }}" witdh="100px" height="100px" class="css-class" alt="alt text"></td>
                                <td>{{ $products->view }}</td>
                                <td style="text-align:center">
                                <input type="checkbox" data-id="{{ $products->id }}" name="status" class="js-switch" {{ $products->status == 1 ? 'checked' : '' }}>
                                </td>
                                <td style="text-align:center ">
                                    <a class="btn btn-info" href="{{ route('product.create') }}">Create</a>
                                    <a class="btn btn-primary" href="{{ route('product.edit',$products->id) }}">Edit</a>
                                    <button type="button" data-id="{{ $products->id }}" id="deleteproduct"   class="btn btn-danger deleteproduct">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
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
                dataType:"json",
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