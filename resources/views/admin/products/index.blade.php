@extends('layouts.adminlayout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Clients</h1>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Products</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Products</h3>
                </div>
                <div class="box-body">
                    <table id="example" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Title</th>
                            <th>Thumbnail</th>
                            <th>User</th>
                            <th>Price</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($products))
                        <?php $i = 0;?>
                        @foreach($products as $product)
                        <?php $i++;?>
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $product->title }}</td>
                            <td><img src="{{ asset('storage/'.$product->thumbnail) }}" alt="" width="50"></td>
                            <td>{{ $product->user->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->created_at }}</td>
                            <td>
                                <a href="{{ route('admin.products.show', $product->id) }}" class="btn btn-info btn-sm" title="Show" data-toggle="tooltip"><i class="fa fa-eye"></i></a>
                                <a href="" class="btn btn-success btn-sm" title="Edit" data-toggle="tooltip"><i class="fa fa-edit"></i></a>
                                <a href="" class="btn btn-danger btn-sm" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>    
                        
                        @endforeach
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>S.No</th>
                            <th>Title</th>
                            <th>Thumbnail</th>
                            <th>Client Name</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection
@section('page-scripts')
<script src="{{ asset('assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
  $(function () {
    $('#example').DataTable()
  })
</script>
@endsection