<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Kanchan Cashmere</title>

    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">


</head>

<body>

    @include('frontend.layouts.nav')
    @yield('content')
    @include('frontend.layouts.footer')

    @yield('scripts')

</body>

</html>
