@extends('layout.app')
@section('title', 'Order Details')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/cart_order.css') }}">
@endsection
@section('content')
    <div class="order-details-container">
        <h2>Order #{{ $order->id }}</h2>

        <h3>User Details</h3>
        <p><strong>Name:</strong> {{ $order->user->name }}</p>
        <p><strong>Email:</strong> {{ $order->user->email }}</p>
        <p><strong>Shipping Address:</strong> {{ $order->shipping_address }}</p>

        <h3>Products</h3>
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order->items as $item)
                    <tr>
                        <td>{{ $item->product->name }}</td>
                        <td>${{ number_format($item->unit_price, 2) }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>${{ number_format($item->unit_price * $item->quantity, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="cart-total">
            <strong>Total: ${{ number_format($order->total_amount, 2) }}</strong>
        </div>

        <a href="{{ route('orders.index') }}" class="btn">Back to Orders</a>
    </div>
@endsection