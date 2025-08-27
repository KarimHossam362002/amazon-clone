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
        <p><strong>Discount:</strong> {{ $product->discount }}%</p>
        <p><strong>Price After Discount:</strong> ${{ $product->price_after_discount }}</p>
        <p><strong>Stock:</strong> {{ $product->stock_quantity }}</p>
        <p><strong>Category:</strong> {{ $product->category?->name }}</p>
        <p><strong>Brand:</strong> {{ $product->brand }}</p>
        <p><strong>Rating:</strong> {{ $product->rating_avg }}</p>
        <p><strong>Description:</strong> {{ $product->description }}</p>

        <div>
            @php
                $defaultImage = asset('assets/images/products/defaultProduct.png');
                $createdPath = public_path('assets/images/products/created/' . $product->image);
                $updatedPath = public_path('assets/images/products/updated/' . $product->image);

                if ($product->image && file_exists($createdPath)) {
                    $imagePath = asset('assets/images/products/created/' . $product->image);
                } elseif ($product->image && file_exists($updatedPath)) {
                    $imagePath = asset('assets/images/products/updated/' . $product->image);
                } else {
                    $imagePath = $defaultImage;
                }
            @endphp

            <img src="{{ $imagePath }}" alt="Product Image" width="150" class="img-thumbnail">
        </div>
    </div>
</div>
@stop