<!DOCTYPE html>
<html lang="es">
<head>
    @include('admin.partials.head')
</head>
<body>
    @include('admin.partials.nav')

    <main class="container">
        @yield('content')
    </main>
</body>
</html>