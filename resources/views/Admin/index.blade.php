@extends('adminlte::page')

@section('title', 'Dashboard')

@section("css")
<link rel="stylesheet" href="{{ asset('assets/css/admin/user_profile.css') }}">
@endsection

@section('content_header')
    <h1 class="text-primary"><i class="fas fa-tachometer-alt"></i> Admin Dashboard</h1>
@stop

@section('content')
<div class="row">

    {{-- Total Users --}}
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>Users</h3>
                <p>Total Users</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    {{-- Total Products --}}
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>Products : {{ $productCount }} </h3>
                <p>Total Products</p>
            </div>
            <div class="icon">
                <i class="fas fa-box"></i>
            </div>
            <a href="{{ route('products.index') }}" class="small-box-footer">
                Manage Products <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

      {{-- Total Categories --}}
    <div class="col-lg-3 col-6">
        <div class="small-box bg-red">
            <div class="inner">
                <h3>Categories : {{ $categoryCount }} </h3>
                <p>Total Categories</p>
            </div>
            <div class="icon">
                <i class="fas fa-box"></i>
            </div>
            <a href="{{ route('categories.index') }}" class="small-box-footer">
                Manage Categories <i class="fas fa-arrow-circle-right"></i>
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
