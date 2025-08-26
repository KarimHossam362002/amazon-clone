@extends('adminlte::page')

@section('title', 'Product Details')

@section('content_header')
    <h1>Product Details</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <h4>{{ $product->name }}</h4>
        <p><strong>Price:</strong> ${{ $product->price }}</p>
        <p><strong>Stock:</strong> {{ $product->stock_quantity }}</p>
        <p><strong>Category:</strong> {{ $product->category?->name }}</p>
        <p><strong>Brand:</strong> {{ $product->brand }}</p>
        <p><strong>Rating:</strong> {{ $product->rating_avg }}</p>
        <p><strong>Description:</strong> {{ $product->description }}</p>
        @if($product->image_url)
            <img src="{{ $product->image_url }}" class="img-fluid mt-3" style="max-width:200px;">
        @endif
    </div>
</div>
@stop
