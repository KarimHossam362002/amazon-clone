@extends('adminlte::page')

@section('title', 'Payments')

@section('content')
    <div class="admin-container">
        <h2>Payments</h2>

        {{-- Session messages --}}
        @if (session()->has('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>
        @endif

        @if (session()->has('updated'))
            <div class="alert alert-success">{{ session()->get('updated') }}</div>
        @endif

        <a href="{{ route('payments.create') }}" class="btn btn-success mb-3">Add Payment</a>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Method</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($payments as $payment)
                    <tr>
                        <td>{{ $payment->id }}</td>
                        <td>{{ $payment->payment_method }}</td>
                        <td>${{ number_format($payment->amount, 2) }}</td>
                        <td>{{ $payment->payment_date }}</td>
                        <td>
                            <span
                                class="badge 
                                    {{ $payment->payment_status == 'Completed' ? 'bg-success' : ($payment->payment_status == 'Failed' ? 'bg-danger' : 'bg-warning') }}">
                                {{ $payment->payment_status }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('payments.show', $payment->id) }}" class="btn btn-info btn-sm"><i class="fas fa-clipboard-list"></i></a>
                            <a href="{{ route('payments.edit', $payment->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('payments.destroy', $payment->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fas fa-minus-circle"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


        <div class="row">
            <div class="col-12 mt-5">
                @if ($payments->hasPages())
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item {{ $payments->currentPage() == 1 ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $payments->previousPageUrl() }}" aria-label="Previous">
                                    <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                                    <span class="sr-only"> {{ 'lang.Previous' }} </span>
                                </a>
                            </li>
                            @foreach ($payments->getUrlRange(1, $payments->lastPage()) as $pageLink)
                                @php
                                    //fuck you php iam mohamed seabeai
                                    $pageString = strstr($pageLink, 'page=', false);
                                    $rev = strrev($pageString);
                                    $pageNum = strstr($rev, '=', true);
                                    $pageNum = strrev($pageNum);
                                @endphp
                                <li class="page-item {{ substr($pageLink, -1) == $payments->currentPage() ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $pageLink }}">{{ $pageNum }}
                                    </a>
                                </li>
                            @endforeach
                            <li class="page-item {{ $payments->currentPage() == $payments->lastPage() ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $payments->nextPageUrl() }}" aria-label="Next">
                                    <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    <span class="sr-only"> {{ 'lang.Next' }} </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                @endif

            </div>
        </div>
    </div>
@endsection