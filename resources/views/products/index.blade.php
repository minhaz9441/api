@extends('layouts.userlayout')

@section('content')

@if(session()->has('message'))
<div class="alert alert-success">
<strong>Successfull...! </strong> {{ session('message') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>    
</div>
@endif

<article class="card  mb-3">
	<div class="card-body">
		<div><a href="{{ route('user.product.create') }}" class="btn btn-success"> <i class="fa fa-plus"></i> Add product</a>
    <span class="text-right">
    <a href="#" class="btn btn-primary"><i class="fa fa-list"></i></a>
    <a href="#" class="btn btn-primary"><i class="fa fa-th"></i></a>
    </span>
    </div>
		<div class="row">
      @if($products->count() > 0)
      @foreach($products as $product)
      <div class="col-md-4">
        <figure class="card card-product-grid">
          <div class="image-wrap">
            <img src="{{ asset('storage/'.$product->thumbnail)}}" class="border img-sm">
          </div>
          <figcaption class="info-wrap">
            <time class="text-muted"><i class="fa fa-calendar-alt"></i> {{ $product->created_at }}</time>
            <a href="{{ route('user.product.show', $product->id) }}" class="title mb-2">{{ $product->title }}</a>
            <div class="price-wrap mb-3">
              <strong> Rs. {{ $product->price }} </strong> <small class="text-muted">/ per item</small>
            </div>
            <a href="{{ route('user.product.edit', $product->id) }}" class="btn btn-primary"> <i class="fa fa-pen"></i> Edit</a>
            <a href="{{ route('user.product.show', $product->id) }}" class="btn btn-warning"> <i class="fa fa-eye"></i> View</a>
          </figcaption>
        </figure>
      </div> <!-- col.// -->
      @endforeach
      @else
        <p>We could't fetch any product from database...!</p>
      @endif

	</div> <!-- row.// -->

	</div> <!-- card-body .// -->
</article> <!-- card.// -->
@endsection
