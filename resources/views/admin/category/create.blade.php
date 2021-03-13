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
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Category</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="{{ route('admin.category.store') }}" method="post">
                    @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Category Title" value="{{ old('title') }}">
                        @if($errors->has('title'))
                            <div class="text-danger">{{ $errors->first('title') }}</div>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        <label>Parent Category</label>
                        <select class="form-control select2" name="parent_id[]" multiple="multiple" data-placeholder="Select Parent Category"
                                style="width: 100%;">
                            @if($categories)
                                <option value="0">Top Level</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            @endif
                        </select>
                        @if($errors->has('parent_id'))
                            <div class="text-danger">{{ $errors->first('parent_id') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="description">Password</label>
                        <textarea name="description" rows="10" class="form-control" placeholder="Enter Description">{{ old('description') }}</textarea>
                        @if($errors->has('description'))
                            <div class="text-danger">{{ $errors->first('description') }}</div>
                        @endif
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
            <!-- /.box -->
            </div>
    </div>
</section>
@endsection

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/admin/bower_components/select2/dist/css/select2.min.css')}}">
<style>
    .select2-container--default .select2-selection--multiple .select2-selection__choice {
    background-color: #3c8dbc;
    border-color: #367fa9;
    padding: 1px 10px;
    color: #fff;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
    margin-right: 5px;
    color: rgba(255,255,255,0.7);
}
.select2-container--default .select2-selection--multiple{
    border-radius: 0;
}
</style>
@endsection
@section('page-scripts')
<script src="{{ asset('assets/admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script>
  $(function () {
    $('.select2').select2()
  })
</script>
@endsection