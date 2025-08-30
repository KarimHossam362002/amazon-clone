@extends('adminlte::page')
@section('css')
        <link rel="icon" href="{{ asset('assets/img/logos/Amazon-icon.png') }}">
    @endsection
@section('title', 'Add Payment')

@section('content')
    <div class="admin-container">
        <h1>Create Payment</h1>

        <form action="{{ route('payments.store') }}" method="POST">
            @csrf

            <div class="form-group mb-3">
                <label for="order_id">Order</label>
                <select name="order_id" id="order_id" class="form-control">
                    <option value="">-- Select Order --</option>
                    @foreach($orders as $order)
                        <option value="{{ $order->id }}" {{ old('order_id') == $order->id ? 'selected' : '' }}>
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
                    <option value="">-- Select Method --</option>
                    @foreach(['Credit Card', 'PayPal', 'Bank Transfer', 'Cash'] as $method)
                        <option value="{{ $method }}" {{ old('payment_method') == $method ? 'selected' : '' }}>{{ $method }}
                        </option>
                    @endforeach
                </select>
                @error('payment_method')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="amount">Amount</label>
                <input type="number" step="0.01" name="amount" id="amount" value="{{ old('amount') }}" class="form-control">
                @error('amount')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="payment_status">Status</label>
                <select name="payment_status" id="payment_status" class="form-control">
                    @foreach(['Pending', 'Completed', 'Failed'] as $status)
                        <option value="{{ $status }}" {{ old('payment_status') == $status ? 'selected' : '' }}>{{ $status }}
                        </option>
                    @endforeach
                </select>
                @error('payment_status')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="payment_date">Payment Date</label>
                <input type="datetime-local" name="payment_date" id="payment_date" value="{{ old('payment_date') }}"
                    class="form-control">
                @error('payment_date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Create Payment</button>
            <a href="{{ route('payments.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection