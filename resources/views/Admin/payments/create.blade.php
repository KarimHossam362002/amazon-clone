@extends('adminlte::page')

@section('title', 'Add Payment')

@section('content')
    <div class="admin-container">
        <h2>Add Payment</h2>

        <form action="{{ route('payments.store') }}" method="POST">
            @csrf
            <label>Payment Method</label>
            <select name="payment_method" class="form-control" required>
                <option value="Credit Card">Credit Card</option>
                <option value="PayPal">PayPal</option>
                <option value="Bank Transfer">Bank Transfer</option>
                <option value="Cash">Cash</option>
            </select>

            <label>Amount</label>
            <input type="number" name="amount" step="0.01" class="form-control" required>

            <label>Payment Date</label>
            <input type="datetime-local" name="payment_date" class="form-control">

            <label>Status</label>
            <select name="payment_status" class="form-control">
                <option value="Pending">Pending</option>
                <option value="Completed">Completed</option>
                <option value="Failed">Failed</option>
            </select>

            <button type="submit" class="btn btn-success mt-3">Save</button>
            <a href="{{ route('payments.index') }}" class="btn btn-secondary mt-3">Cancel</a>
        </form>
    </div>
@endsection