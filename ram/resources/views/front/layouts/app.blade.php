<!doctype html>
<html lang="es">
<head>
    @include('front.partials.head')

    <title>@yield('title')</title>
</head>

<body>
    @include('front.partials.navbar')

    <div class="main-wrapper ">
        <section class="page-title bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <span class="text-white">@yield('section')</span>
                            <h1 class="text-capitalize mb-4 text-lg">@yield('section-title')</h1>
                            @yield('breadcrumb')
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @yield('content')
    </div>

    @include('front.partials.footer')

    @include('front.partials.scripts')
</body>
</html>
