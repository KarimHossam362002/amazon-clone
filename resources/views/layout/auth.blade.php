<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Amazon Clone</title>
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
</head>

<body>
    <div class="auth-container">
        <div class="auth-box">
            <a href="{{ route("index") }}"> <img src="{{ asset('assets/img/amazon-com-light.svg') }}" alt="Amazon Logo"
                    class="logo">
            </a>
            @yield('content')
        </div>
    </div>
</body>

</html>