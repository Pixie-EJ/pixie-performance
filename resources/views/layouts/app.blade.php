<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Pixie Performance</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @component('components.navbar')@endcomponent

        @guest
        <main class="py-0">
            @yield('content')
        </main>
        @endguest

        @auth
        <div class="sidebar-container">
            @component('components.sidebar')@endcomponent
            @yield('content')
        </div>
        @endauth

    </div>

    <script>
        let sidebar_active = 0;
        function sidebarToggle() {
            if(sidebar_active % 2 == 0) {
                $('.sidebar').addClass('sidebar-active')
                $('.sidebar').removeClass('sidebar')
            } else {
                $('.sidebar-active').addClass('sidebar')
                $('.sidebar-active').removeClass('sidebar-active')
            }
            sidebar_active++;
        }
    </script>

</body>
</html>
