@extends('layouts.mainlayout')

@section('main-content')
<section class="section-content padding-y">
	<div class="container">
		<div class="row">
            <aside class="col-md-3 user-sidebar">
				<ul class="list-group">
					<span class="list-group-item active" href="#"> Account overview  </span>
					<a class="list-group-item" href="{{ route('user.product.index') }}"><i class="fa fa-database"></i> My Selling Items </a>
					<a href="{{ route('user.company.index') }}" class="list-group-item"><i class="fa fa-globe"></i> Website</a>
					<a class="list-group-item" href="#"><i class="fa fa-bell"></i> Notifications </a>
					<a class="list-group-item" href="#"><i class="fa fa-envelope"></i> Inbox </a>
					<a class="list-group-item" href="#"><i class="fa fa-user-plus"></i> Membership </a>
					<a class="list-group-item" href="#"><i class="fa fa-heart"></i> My wishlist </a>
					<a class="list-group-item" href="#"><i class="fa fa-server"></i> Inquiries </a>
				</ul>
            </aside> <!-- col.// -->
            <main class="col-md-9">
                @yield('content')
            </main>
        </div>
	</div> <!-- container .//  -->
</section>
@endsection