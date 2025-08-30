@extends('adminlte::page')

@section('title', 'Payment Details')

@section('content')
    <div class="admin-container">
        <h1>Payment #{{ $payment->id }}</h1>

        <table class="table table-bordered">
            <tr>
                <th>Order ID</th>
                <td>{{ $payment->order_id }}</td>
            </tr>
            <tr>
                <th>User</th>
                <td>{{ $payment->order->user->name ?? 'Unknown' }}</td>
            </tr>
            <tr>
                <th>Payment Method</th>
                <td>{{ $payment->payment_method }}</td>
            </tr>
            <tr>
                <th>Amount</th>
                <td>${{ number_format($payment->amount, 2) }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ $payment->payment_status }}</td>
            </tr>
            <tr>
                <th>Payment Date</th>
                <td>{{ $payment->payment_date }}</td>
            </tr>
        </table>

        <a href="{{ route('payments.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection