@extends('adminlte::page')
@section('title', 'Amazon | Shipments')
@section('css')
        <link rel="icon" href="{{ asset('assets/img/logos/Amazon-icon.png') }}">
    @endsection
@section('content')
    <h2>Shipments</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Order ID</th>
                <th>Order Total</th>
                <th>Status</th>
                <th>Shipment Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($shipments as $shipment)
                <tr>
                    <td>{{ $shipment->id }}</td>
                    <td>{{ $shipment->order_id }}</td>
                    <td>${{ number_format($shipment->order->total_amount ?? 0, 2) }}</td>
                    <td>{{ $shipment->status }}</td>
                    <td>{{ $shipment->shipment_date ? $shipment->shipment_date->format('Y-m-d') : '-' }}</td>
                    <td>
                        <a href="{{ route('shipments.edit', $shipment->id) }}" class="btn btn-warning btn-sm"><i
                                class="fas fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-12 mt-5">
            @if ($shipments->hasPages())
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item {{ $shipments->currentPage() == 1 ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $shipments->previousPageUrl() }}" aria-label="Previous">
                                <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                                <span class="sr-only"> {{ 'lang.Previous' }} </span>
                            </a>
                        </li>
                        @foreach ($shipments->getUrlRange(1, $shipments->lastPage()) as $pageLink)
                            @php
                                //fuck you php iam mohamed seabeai
                                $pageString = strstr($pageLink, 'page=', false);
                                $rev = strrev($pageString);
                                $pageNum = strstr($rev, '=', true);
                                $pageNum = strrev($pageNum);
                            @endphp
                            <li class="page-item {{ substr($pageLink, -1) == $shipments->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $pageLink }}">{{ $pageNum }}
                                </a>
                            </li>
                        @endforeach
                        <li class="page-item {{ $shipments->currentPage() == $shipments->lastPage() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $shipments->nextPageUrl() }}" aria-label="Next">
                                <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                <span class="sr-only"> {{ 'lang.Next' }} </span>
                            </a>
                        </li>
                    </ul>
                </nav>
            @endif

        </div>
    </div>

@endsection