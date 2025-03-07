<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titolo')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
    @include('partials.header')
    <div class="container">
        @yield('contenuto')
    </div>
    @include('partials.footer')
</body>

</html>
