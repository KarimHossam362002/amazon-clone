@extends('adminlte::page')

@section('title', 'Review Details')
@section("css")
    <link rel="stylesheet" href="{{ asset('assets/css/admin/review_details.css') }}">
@endsection
@section('content')
    <div class="admin-container">
        <h2>Review Details</h2>

        <div class="review-details">
            <!-- Left: User Info -->
            <div class="details-left">
                <h4>User Info</h4>
                <p><strong>Name:</strong> {{ $review->user->name ?? 'N/A' }}</p>
                <p><strong>Email:</strong> {{ $review->user->email ?? 'N/A' }}</p>
                <p><strong>Phone:</strong> {{ $review->user->phone_number ?? 'N/A' }}</p>
                <p><strong>Shipping Address:</strong> {{ $review->user->shipping_address ?? 'N/A' }}</p>
                <p><strong>Billing Address:</strong> {{ $review->user->billing_address ?? 'N/A' }}</p>
            </div>

            <!-- Center: Product Info -->
            <div class="details-center">
                <h4>Product Info</h4>
                <p><strong>Name:</strong> {{ $review->product->name ?? 'N/A' }}</p>
                <p><strong>Price:</strong> ${{ $review->product->price ?? 'N/A' }}</p>
                <p>
                    <strong>Image:</strong><br>
                    @if($review->product && $review->product->image)
                        <img src="{{ $review->product->image }}" alt="{{ $review->product->name }}" class="product-img">
                    @else
                        <img src="https://via.placeholder.com/150x150?text=No+Image" alt="No image" class="product-img">
                    @endif
                </p>
            </div>

            <!-- Right: Review Info -->
            <div class="details-right">
                <h4>Review</h4>
                <p><strong>Rating:</strong> {{ $review->rating }} ⭐</p>
                <p><strong>Comment:</strong> {{ $review->comment ?? 'No comment' }}</p>
                <p><strong>Created At:</strong> {{ $review->created_at->format('Y-m-d H:i') }}</p>
            </div>
        </div>

        <div class="mt-3">
            <a href="{{ route('reviews.index') }}" class="btn btn-secondary">Back to Reviews</a>
        </div>
    </div>
@endsection