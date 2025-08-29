@extends('adminlte::page')
@section('title', 'User Details')

@section("css")
    <link rel="stylesheet" href="{{ asset('assets/css/admin/user_profile.css') }}">
@endsection
@section('content')
    <div class="admin-container">
        <h2>User Details</h2>

        <div class="user-details">
            <!-- Left: Info -->
            <div class="details-left">
                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <p><strong>ID:</strong> {{ $user->id }}</p>
                    <p><strong>Name:</strong> {{ $user->name }}</p>
                    <p><strong>Email:</strong> {{ $user->email }}</p>

                    <p><strong>Role:</strong>
                        <select name="role">
                            <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>User</option>
                            <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                        </select>
                    </p>

                    <p><strong>Phone:</strong> {{ $user->phone_number ?? 'N/A' }}</p>
                    <p><strong>Shipping Address:</strong> {{ $user->shipping_address ?? 'N/A' }}</p>
                    <p><strong>Billing Address:</strong> {{ $user->billing_address ?? 'N/A' }}</p>
                    <p><strong>Joined At:</strong> {{ $user->created_at->format('Y-m-d H:i') }}</p>

                    <button type="submit" class="btn btn-primary">Update Role</button>
                    <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
                </form>
            </div>

            <!-- Right: Profile Image -->
            <div class="details-right">
                @if($user->image)
                    <img src="{{ $user->image }}" alt="{{ $user->name }}" class="profile-img">
                @else
                    <img src="https://via.placeholder.com/200x200?text=No+Image" alt="No image" class="profile-img">
                @endif
            </div>
        </div>
    </div>
@endsection