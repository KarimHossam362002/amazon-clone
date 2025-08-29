@extends('layout.app')
@section('title', 'Amazon | My Profile')

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/user_profile.css') }}">
@endsection

@section('content')

<div class="user-dashboard">
    <!-- Sidebar -->
    <div class="sidebar">
        <ul>
            <li><a href="{{ route('profile.edit') }}">Profile</a></li>
            {{-- <li><a href="{{ url('/cart') }}">Cart</a></li> --}}
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h2>Manage Profile</h2>

        @if(session('success'))
            <div class="alert success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="alert error">{{ $errors->first() }}</div>
        @endif

        <form action="{{ route('profile.update') }}" method="POST">
            @csrf

            <label>Name</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" required>

            <label>Email</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" required>

            <label>Password (leave blank if not changing)</label>
            <input type="password" name="password">

            <label>Confirm Password</label>
            <input type="password" name="password_confirmation">

            <label>Shipping Address</label>
            <textarea name="shipping_address">{{ old('shipping_address', $user->shipping_address) }}</textarea>

            <label>Billing Address</label>
            <textarea name="billing_address">{{ old('billing_address', $user->billing_address) }}</textarea>

            <button type="submit" class="btn">Update Profile</button>
        </form>
    </div>
</div>
@endsection
