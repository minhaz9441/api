@extends('layouts.mainlayout')

@section('main-content')

<div class="container">
    <div class="single-product">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('storage/'.$product->thumbnail) }}" alt="">
            </div>
            <div class="col-md-6">
                <h2>{{ ucfirst($product->title) }}</h2>
                <p>{{ 'Price : '. $product->price }} / Item</p>
                <p>{{ $product->category->title }}</p>
                <p>{{ $product->description }}</p>
            </div>
        </div>
    </div>
</div>

@endsection