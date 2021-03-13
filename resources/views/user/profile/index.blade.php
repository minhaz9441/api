@extends('layouts.userlayout')

@section('content')

@if(session()->has('message'))
<div class="alert alert-success">
<strong>Successfull...! </strong> {{ session('message') }}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>    
</div>
@elseif(session()->has('error'))
<div class="alert alert-danger">
<strong>Error...! </strong> {{ session('error') }}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>    
</div>
@endif
<article class="card mb-3">
	<div class="card-body">
		<a href="{{ route('user.profile.edit', $userdata->id) }}" class="btn btn-info btn-sm float-right" data-toggle="tooltip" title="Edit Profile"> <i class="fa fa-edit"></i> Edit</a>
		<figure class="icontext">
				<div class="icon">
				@if(!empty($userdata->profile->thumbnail))
					<img class="rounded-circle img-sm border" src="{{ asset('storage/'.auth()->user()->profile->thumbnail) }}" alt="">
				@else
					<img class="rounded-circle img-sm border" src="{{ asset('images/img_avatar.png')}}">
				@endif
				</div>
				<div class="text">
					<strong> {{ "Mr.". ucfirst($userdata->name) }} </strong> <br> 
					{{ $userdata->email }} <br> 
					
				</div>
		</figure>
		<hr>
		<p>
			<i class="fa fa-map-marker text-muted"></i> &nbsp; My address:  
				<br>
			City, Street name, Building 123, House 321 &nbsp 
			<a href="#" class="btn-link"> Edit</a>
		</p>

		

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

@endsection
