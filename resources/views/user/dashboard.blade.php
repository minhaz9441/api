@extends('layouts.userlayout')

@section('content')
<!-- ========================= SECTION CONTENT ========================= -->
<article class="card mb-3">
	<div class="card-body">
		
		<article class="card-group">
			<figure class="card bg">
				<div class="p-3">
					<h5 class="card-title">38</h5>
					<span>Orders</span>
				</div>
			</figure>
			<figure class="card bg">
				<div class="p-3">
					<h5 class="card-title">5</h5>
					<span>Wishlists</span>
				</div>
			</figure>
			<figure class="card bg">
				<div class="p-3">
					<h5 class="card-title">12</h5>
					<span>Awaiting delivery</span>
				</div>
			</figure>
			<figure class="card bg">
				<div class="p-3">
					<h5 class="card-title">50</h5>
					<span>Delivered items</span>
				</div>
			</figure>
		</article>
		

	</div> <!-- card-body .// -->
</article> <!-- card.// -->

<article class="card  mb-3">
	<div class="card-body">
		<h5 class="card-title mb-4">Recent Products </h5>	

		<div class="row">
		@if($recent_products)
		@foreach($recent_products as $rc_pro)
		<div class="col-md-6">
			<figure class="itemside  mb-3">
				<div class="aside"><img src="{{ asset('storage/'.$rc_pro->thumbnail) }}" class="border img-sm"></div>
				<figcaption class="info">
					<time class="text-muted"><i class="fa fa-calendar-alt"></i> {{ $rc_pro->created_at }}</time>
					<p>{{ $rc_pro->title }}</p>
					<span class="text-warning">Price : Rs.{{ $rc_pro->price }}</span>
				</figcaption>
			</figure>
		</div> <!-- col.// -->
		@endforeach
		@endif
	</div> <!-- row.// -->

	<a href="{{ route('user.product.index') }}" class="btn btn-outline-primary"> See all products  </a>
	</div> <!-- card-body .// -->
</article> <!-- card.// -->

<!-- ========================= SECTION CONTENT END// ========================= -->
@endsection