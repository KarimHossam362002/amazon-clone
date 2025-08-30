@extends('adminlte::page')
@section('title', 'Edit Shipment')
@section('css')
        <link rel="icon" href="{{ asset('assets/img/logos/Amazon-icon.png') }}">
    @endsection
@section('content')
    <h2>Edit Shipment #{{ $shipment->id }}</h2>

    <form action="{{ route('shipments.update', $shipment->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Order ID:</label>
            <input type="text" value="{{ $shipment->order_id }}" class="form-control" disabled>
        </div>

        <div class="form-group">
            <label>Status:</label>
            <select name="status" class="form-control">
                @foreach(['Pending', 'In Transit', 'Delivered', 'Returned'] as $status)
                    <option value="{{ $status }}" {{ $shipment->status === $status ? 'selected' : '' }}>
                        {{ $status }}
                    </option>
                @endforeach
            </select>
            @error('status')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label>Shipment Date:</label>
            <input type="date" name="shipment_date" value="{{ $shipment->shipment_date?->format('Y-m-d') }}"
                class="form-control">
            @error('shipment_date')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Update Shipment</button>
        <a href="{{ route('shipments.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection