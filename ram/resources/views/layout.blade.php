<!DOCTYPE html>
<html lang="es">
<head>
    <title>@yield('title', 'Rent a Movie')</title>

    @include('front.partials.head')
</head>
<body>

    @include('front.partials/navbar')

    <main class="container">
        @yield('container')
    </main>

    @include('front.partials.footer')

</body>
</html>
