@extends('layout.app')
@section('title', 'Cart')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/cart_order.css') }}">
@section('content')
    <div class="cart-container">
        <h2>Shopping Cart</h2>

        @if(session('success'))
            <div class="alert success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert error">{{ session('error') }}</div>
        @endif
            <!-- Check cart items empty -->
        @if($cart->items->isEmpty())
            <p>Your cart is empty. <a href="{{ route('product') }}"><button class="btn btn-continue">Continue Shopping</button></a></p>
        @else
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart->items as $item)
                        <tr>
                            <td>{{ $item->product->name }}</td>
                            <td>${{ number_format($item->product->price, 2) }}</td>
                            <td>
                                <form action="{{ route('cart.update', $item->id) }}" method="POST">
                                    @csrf
                                    <input type="number" name="quantity" value="{{ $item->quantity }}" min="1">
                                    <button type="submit">Update</button>
                                </form>
                            </td>
                            <td>${{ number_format($item->product->price * $item->quantity, 2) }}</td>
                            <td>
                                <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="cart-total">
                <strong>Total: ${{ number_format($cart->items->sum(fn($i) => $i->product->price * $i->quantity), 2) }}</strong>
            </div>

            <a href="{{ route('orders.checkout') }}" class="btn checkout-btn">Proceed to Checkout</a>
        @endif
    </div>
@endsection