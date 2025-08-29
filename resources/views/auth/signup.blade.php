@extends('layout.auth')
@section('title', 'Sign Up')

@section('content')
    <div class="auth-container">
        <div class="auth-box">
 
         

            <h2>Create Account</h2>

            {{-- Show validation errors --}}
            @if($errors->any())
                <div class="error">
                    <ul style="margin: 0; padding-left: 18px;">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Signup Form --}}
            <form method="POST" action="{{ route('signup') }}">
                @csrf

                {{-- Name --}}
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>

                {{-- Email --}}
                <label for="email">Email address</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>

                {{-- Password --}}
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                {{-- Confirm Password --}}
                <label for="password_confirmation">Re-enter password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>

                <button type="submit" class="btn">Create your Amazon account</button>
            </form>

            <p class="switch">
                Already have an account?
                <a href="{{ route('login') }}">Sign in</a>
            </p>
        </div>
    </div>
@endsection