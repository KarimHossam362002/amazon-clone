<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Amazon')</title>
    <link rel="icon" href="{{asset("assets/img/logos/Amazon-icon.png")}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="{{asset("assets/css/footer_style.css")}}" />
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}" />

    @yield('styles')
</head>

<body class="body">

    {{-- Header --}}
    @include('layout.header')

    @yield('content')

    {{-- Footer --}}
    @include('layout.footer')



    <script src="{{asset("assets/js/carsoul.js")}}"></script>
    <script src="{{asset("assets/js/script.js")}}"></script>
    <script>
        // Auto-hide flash message after 5 seconds
        setTimeout(() => {
            const flash = document.getElementById('flash-message');
            if (flash) {
                flash.style.transition = "opacity 0.5s ease";
                flash.style.opacity = "0";
                setTimeout(() => flash.remove(), 100); // remove from DOM after fade
            }
        }, 5000);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>