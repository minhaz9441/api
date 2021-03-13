@extends('layouts.userlayout')

@section('content')

<form action="{{ route('user.product.store') }}" method="post" enctype="multipart/form-data">
@csrf
<div class="row">   
    <div class="col-md-9">
        <article class="card mb3">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Ex: Bag" value="{{ old('title') }}">
                    @if($errors->has('title'))
                        <div class="text-danger">{{ $errors->first('title') }}</div>
                    @endif
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control" placeholder="Product price" value="{{ old('price') }}">
                        @if($errors->has('price'))
                            <div class="text-danger">{{ $errors->first('price') }}</div>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="category">Category</label>
                        <select name="category" class="form-control">
                            <option value="">Select Category</option>
                            @if($categories)
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                            @endif
                        </select>
                        @if($errors->has('category'))
                            <div class="text-danger">{{ $errors->first('category') }}</div>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" placeholder="Product description"></textarea>
                </div>
                
                <div class="form-group">
                    <img id="imagePreview" alt=""><br>
                    <label for="thumbnail">Upload Product Image</label>
                    <input type="file" name="thumbnail" class="form-control" onchange="loadfile(event)">
                    @if($errors->has('thumbnail'))
                        <div class="text-danger">{{ $errors->first('thumbnail') }}</div>
                    @endif
                </div>

                <div class="text-center">
                    <input type="submit" name="submit" value="Save Product" class="btn btn-primary">
                </div>
            </div>
        </article>
    </div>
    
</div>

</form>
@endsection
<script>
    function loadfile(event){
        var output = document.getElementById('imagePreview');
        output.src = URL.createObjectURL(event.target.files[0]);
        console.log(output.src);
    }
</script>