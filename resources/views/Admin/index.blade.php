@extends('adminlte::page')

@section('title', 'Amazon | Dashboard')

@section("css")
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" /> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/admin/user_profile.css') }}">
    <link rel="icon" href="{{ asset('assets/img/logos/Amazon-icon.png') }}">
@endsection

@section('content_header')
<h1 class="text-primary"><i class="fas fa-tachometer-alt"></i> Admin Dashboard</h1>
@stop

@section('content')
<div class="row">

    {{-- Total Users --}}
    <div class="col-lg-3 col-6">
        <div class="small-box  bg-primary text-white shadow-sm">
            <div class="inner">
                <h3>Users</h3>
                <p>Total Users : {{$userCount}}</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <a href="{{ route("users.index") }}" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    {{-- Total Categories --}}
    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning text-dark shadow-sm">
            <div class="inner">
                <h3>Categories </h3>
                <p>Total Categories : {{ $categoryCount }}</p>
            </div>
            <div class="icon">
                <i class="fas fa-folder-open"></i>
            </div>
            <a href="{{ route('categories.index') }}" class="small-box-footer">
                Manage Categories <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    {{-- Total Products --}}
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info text-white shadow-sm">
            <div class="inner">
                <h3>Products </h3>
                <p>Total Products : {{$productCount}}</p>
            </div>
            <div class="icon">
                <i class="fas fa-box"></i>
            </div>
            <a href="{{ route('products.index') }}" class="small-box-footer">
                Manage Products <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>


    {{-- Total Reviews --}}
    <div class="col-lg-3 col-6">
        <div class="small-box bg-secondary text-white shadow-sm">
            <div class="inner">
                <h3>Reviews </h3>
                <p>Total Reviews : {{ $reviewCount }}</p>
            </div>
            <div class="icon">
                <i class="fas fa-comment-dots"></i>
            </div>
            <a href="{{ route('reviews.index') }}" class="small-box-footer">
                Manage Reviews <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    {{-- Total Payments --}}
    <div class="col-lg-3 col-6">
        <div class="small-box bg-green text-white shadow-sm">
            <div class="inner">
                <h3>Payments </h3>
                <p>Total Payments : {{ $paymentCount }}</p>
            </div>
            <div class="icon">
                <i class="fas fa-credit-card"></i>
            </div>
            <a href="{{ route('payments.index') }}" class="small-box-footer">
                Manage Payments <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    {{-- Total Shipments --}}
    <div class="col-lg-3 col-6">
        <div class="small-box  bg-dark text-white shadow-sm">
            <div class="inner">
                <h3>Shipments </h3>
                <p>Total Shipments : {{ $shipmentCount }}</p>
            </div>
            <div class="icon">
                <i class="fas fa-truck"></i>
            </div>
            <a href="{{ route('shipments.index') }}" class="small-box-footer">
                Manage Shipments <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

</div>

{{-- Shiny Welcome Card --}}
<div class="card mt-4 shadow-lg">
    <div class="card-header bg-gradient-primary text-white">
        <h3 class="card-title"><i class="fas fa-star"></i> Welcome to Amazon Admin Panel</h3>
    </div>
    <div class="card-body">
        <p class="lead">Manage your categories, products, orders, and users with ease 🎯</p>
        <p>Use the sidebar to navigate through different sections of your admin panel.</p>
    </div>
</div>

@stop