@extends('adminlte::page')

@section('title', 'Payment Details')

@section('content')
    <div class="admin-container">
        <h2>Payment Details</h2>

        <div class="card p-4">
            <p><strong>ID:</strong> {{ $payment->id }}</p>
            <p><strong>Method:</strong> {{ $payment->payment_method }}</p>
            <p><strong>Amount:</strong> ${{ number_format($payment->amount, 2) }}</p>
            <p><strong>Date:</strong> {{ $payment->payment_date }}</p>
            <p><strong>Status:</strong>
                <span
                    class="badge 
                    {{ $payment->payment_status == 'Completed' ? 'bg-success' : ($payment->payment_status == 'Failed' ? 'bg-danger' : 'bg-warning') }}">
                    {{ $payment->payment_status }}
                </span>
            </p>
            <p><strong>Created At:</strong> {{ $payment->created_at }}</p>
        </div>

        <div class="mt-3">
            <a href="{{ route('payments.edit', $payment->id) }}" class="btn btn-primary">Edit</a>
            <a href="{{ route('payments.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
@endsection