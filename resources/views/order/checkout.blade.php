@extends('layout.app')
@section('title', 'Checkout')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/cart_order.css') }}">
@endsection
@section('content')
    <div class="checkout-container">
        <h2>Checkout</h2>

        @if(session('error'))
            <div class="alert error">{{ session('error') }}</div>
        @endif

        <form action="{{ route('orders.place') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Shipping Address</label>
                <textarea name="shipping_address"
                    required>{{ old('shipping_address', Auth::user()->shipping_address) }}</textarea>
                @error('shipping_address')<span class="error">{{ $message }}</span>@enderror
            </div>

            <h3>Order Summary</h3>
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
                    @foreach($cart->items as $item)
                        <tr>
                            <td>{{ $item->product->name }}</td>
                            <td>${{ number_format($item->product->price, 2) }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>${{ number_format($item->product->price * $item->quantity, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="cart-total">
                <strong>Total: ${{ number_format($total, 2) }}</strong>
            </div>

            <button type="submit" class="btn checkout-btn">Place Order</button>
        </form>
    </div>
@endsection