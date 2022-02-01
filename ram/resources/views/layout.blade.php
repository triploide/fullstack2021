<!DOCTYPE html>
<html lang="es">
<head>
    <title>@yield('title', 'Rent a Movie')</title>

    @include('partials.head')
</head>
<body>

    @include('partials/navbar')

    <main class="container">
        @yield('container')
    </main>

    @include('partials.footer')

</body>
</html>
