@extends('adminlte::page')
@section('css')
        <link rel="icon" href="{{ asset('assets/img/logos/Amazon-icon.png') }}">
    @endsection
@section('title', 'Edit Payment')

@section('content')
    <div class="admin-container">
        <h1>Edit Payment #{{ $payment->id }}</h1>

        <form action="{{ route('payments.update', $payment) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="order_id">Order</label>
                <select name="order_id" id="order_id" class="form-control">
                    <option value="">-- Select Order --</option>
                    @foreach($orders as $order)
                        <option value="{{ $order->id }}" {{ $payment->order_id == $order->id ? 'selected' : '' }}>
                            #{{ $order->id }} - {{ $order->user->name ?? 'Unknown' }}
                        </option>
                    @endforeach
                </select>
                @error('order_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

        

            <div class="form-group mb-3">
                <label for="payment_method">Payment Method</label>
                <select name="payment_method" id="payment_method" class="form-control">
                    @foreach(['Credit Card', 'PayPal', 'Bank Transfer', 'Cash'] as $method)
                        <option value="{{ $method }}" {{ $payment->payment_method == $method ? 'selected' : '' }}>{{ $method }}
                        </option>
                    @endforeach
                </select>
                @error('payment_method')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="amount">Amount</label>
                <input type="number" step="0.01" name="amount" id="amount" value="{{ $payment->amount }}"
                    class="form-control">
                @error('amount')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="payment_status">Status</label>
                <select name="payment_status" id="payment_status" class="form-control">
                    @foreach(['Pending', 'Completed', 'Failed'] as $status)
                        <option value="{{ $status }}" {{ $payment->payment_status == $status ? 'selected' : '' }}>{{ $status }}
                        </option>
                    @endforeach
                </select>
                @error('payment_status')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="payment_date">Payment Date</label>
                <input type="datetime-local" name="payment_date" id="payment_date"
                    value="{{ \Carbon\Carbon::parse($payment->payment_date)->format('Y-m-d\TH:i') }}" class="form-control">
                @error('payment_date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Update Payment</button>
            <a href="{{ route('payments.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection