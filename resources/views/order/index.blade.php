@extends('layout.app')
@section('title', 'My Orders')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/cart_order.css') }}">
@endsection
@section('content')
    <div class="orders-container">
        <h2>My Orders</h2>

        @if(session('success'))
            <div class="alert success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert success">{{ session('success') }}</div>
        @endif

        @if($orders->isEmpty())
            <p>You have no orders yet. <a href="{{ route('product') }}">Shop now</a>.</p>
        @else
            <table class="orders-table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Date</th>
                        <th>Total</th>
                        <th>Payment Status</th>
                        <th>Shipping Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ \Carbon\Carbon::parse($order->order_date)->format('Y-m-d H:i') }}</td>
                            <td>${{ number_format($order->total_amount, 2) }}</td>
                            <td>{{ $order->payment_status }}</td>
                            <td>{{ $order->shipping_status }}</td>
                            <td><a class="view_order" href="{{ route('orders.show', $order->id) }}"><i
                                        class="fas fa-clipboard-list"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


        @endif
    </div>
@endsection