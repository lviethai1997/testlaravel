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
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Basic Data Tables with responsive plugin</h3>
    </div>
    <div class="panel-body">
        <div id="demo-dt-basic_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
            <div class="row">
                <div class="col-sm-12">
                    <table id="demo-dt-basic" class="table table-striped table-bordered dataTable no-footer dtr-inline collapsed" cellspacing="0" width="100%" role="grid" aria-describedby="demo-dt-basic_info" style="width: 100%;">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px;">Name</th>
                                <th class="sorting" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 100px;">slug</th>
                                <th class="min-tablet sorting" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 100px;">parents</th>
                                <th class="min-tablet sorting" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Extn.: activate to sort column ascending" style="width: 50px;">SaleCate</th>
                                <th class="min-tablet sorting" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Extn.: activate to sort column ascending" style="width: 50px;">Status</th>
                                <th class="min-tablet sorting" tabindex="0" aria-controls="demo-dt-basic" rowspan="1" colspan="1" aria-label="Extn.: activate to sort column ascending" style="width: 200px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($category as $cate)
                            <tr>
                                <td>{{ $cate->cate_name }}</td>
                                <td>{{ $cate->slug }}</td>
                                <td>{{ $cate->parents }}</td>
                                <td>{{ $cate->salecate }}</td>
                                <td>
                                <input type="checkbox" data-id="{{ $cate->id }}" name="status" class="js-switch" {{ $cate->status == 1 ? 'checked' : '' }}>
                                </td>
                                <td style="text-align:center">
                                    <a class="btn btn-info" href="{{ route('category.create') }}">Create</a>
                                    <a class="btn btn-primary" href="{{ route('category.edit',$cate->id) }}">Edit</a>
                                    <button type="button" data-id="{{ $cate->id }}" class="btn btn-danger deletecate">Delete</button>
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
