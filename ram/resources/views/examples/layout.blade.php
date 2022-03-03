<!DOCTYPE html>
<html lang="es">
<head>
    <title>@yield('title', 'Rent a Movie')</title>

    {{-- Notación de punto para acceder a una vista --}}
    @include('examples.partials.head')
</head>
<body>

    {{-- Notación de barras (slash) para acceder a una vista --}}
    @include('examples/partials/navbar')

    <main class="container">
        @yield('container')
    </main>

    @include('examples.partials.footer')

</body>
</html>
