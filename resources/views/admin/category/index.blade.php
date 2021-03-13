@extends('layouts.adminlayout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Categories</h1>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Categories</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Categories</h3>
                    <span class="pull-right">
                        <a href="{{ route('admin.category.create')}}" class="btn btn-success"><i class="fa fa-plus"></i> Add Category</a>
                    </span>
                </div>
                <div class="box-body">
                    <table id="example" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Categories</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($categories))
                        <?php $i = 0;?>
                        @foreach($categories as $category)
                        <?php $i++;?>
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $category->title }}</td>
                            <td>{{ $category->description }}</td>
                            <td>
                                @if($category->childrens->count() > 0)
                                    @foreach($category->childrens as $children)
                                        <p>{{ $children->title }}</p>
                                    @endforeach
                                @else
                                    <p>No parent Categories</p>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-success btn-sm" title="Edit" data-toggle="tooltip"><i class="fa fa-edit"></i></a>
								<form action="{{ route('admin.category.destroy', $category->id) }}" id="delete-form" method="post">
								  @csrf
								  @method('DELETE')
								  <button class="btn btn-danger btn-sm" type="submit" name="submit" title="Delete" data-toggle="tooltip"> <i class="fa fa-trash"></i></button>
								</form>
                            </td>
                        </tr>    
                        @endforeach
                        @endif
                    <tfoot>
                        <tr>
                            <th>S.No</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Categories</th>
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
<style type="text/css">
	#delete-form{
		display: inline-block;
	}
</style>
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