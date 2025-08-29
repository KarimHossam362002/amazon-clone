@extends('layout.auth')
@section('title', 'Login')

@section('content')
    <h2>Sign-In</h2>

    @if($errors->any())
        <div class="error">{{ $errors->first() }}</div>
    @endif

    <form method="POST" action="{{ url('/login') }}">
        @csrf
        <label>Email</label>
        <input type="email" name="email" required value="{{ old('email') }}">

        <label>Password</label>
        <input type="password" name="password" required>

        <button type="submit" class="btn">Login</button>
    </form>

    <p class="switch">New to Amazon? <a href="{{ route('signup') }}">Create your account</a></p>
@endsection