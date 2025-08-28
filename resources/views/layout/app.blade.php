<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Amazon')</title>
    <link rel="icon" href="{{asset("assets/img/logos/Amazon-icon.png")}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="{{asset("assets/css/carsoul_style.css")}}" />
    <link rel="stylesheet" href="{{asset("assets/css/footer_style.css")}}" />
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}" />
    <link rel="stylesheet" href="{{asset("assets/css/product_style.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/customer_service.css")}}" />
</head>

<body class="body">

    {{-- Header --}}
    @include('layout.header')

    @yield('content')

    {{-- Footer --}}
    @include('layout.footer')



    <script src="{{asset("assets/js/carsoul.js")}}"></script>
    <script src="{{asset("assets/js/script.js")}}"></script>
</body>

</html>