@extends('adminlte::page')

@section('title', 'Edit Payment')

@section('content')
<div class="admin-container">
    <h2>Edit Payment</h2>

    <form action="{{ route('payments.update', $payment->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Payment Method</label>
        <select name="payment_method" class="form-control" required>
            <option value="Credit Card" {{ $payment->payment_method == 'Credit Card' ? 'selected' : '' }}>Credit Card</option>
            <option value="PayPal" {{ $payment->payment_method == 'PayPal' ? 'selected' : '' }}>PayPal</option>
            <option value="Bank Transfer" {{ $payment->payment_method == 'Bank Transfer' ? 'selected' : '' }}>Bank Transfer</option>
            <option value="Cash" {{ $payment->payment_method == 'Cash' ? 'selected' : '' }}>Cash</option>
        </select>

        <label>Amount</label>
        <input type="number" name="amount" step="0.01" class="form-control" value="{{ $payment->amount }}" required>

        <label>Payment Date</label>
        <input type="datetime-local" name="payment_date" class="form-control" value="{{ \Carbon\Carbon::parse($payment->payment_date)->format('Y-m-d\TH:i') }}">

        <label>Status</label>
        <select name="payment_status" class="form-control">
            <option value="Pending" {{ $payment->payment_status == 'Pending' ? 'selected' : '' }}>Pending</option>
            <option value="Completed" {{ $payment->payment_status == 'Completed' ? 'selected' : '' }}>Completed</option>
            <option value="Failed" {{ $payment->payment_status == 'Failed' ? 'selected' : '' }}>Failed</option>
        </select>

        <button type="submit" class="btn btn-primary mt-3">Update</button>
        <a href="{{ route('payments.index') }}" class="btn btn-secondary mt-3">Cancel</a>
    </form>
</div>
@endsection
