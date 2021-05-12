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
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>

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
    
        function enableSidebar(sidebar_item) {
            switch(sidebar_item) {
                case 1:
                    $('.sidebar-item-1').addClass('li-active')
                    $('.sidebar-item-2').removeClass('li-active')
                    $('.sidebar-item-3').removeClass('li-active')
                    $('.sidebar-item-4').removeClass('li-active')
                    $('.sidebar-item-5').removeClass('li-active')
                    $('.sidebar-item-6').removeClass('li-active')
                    $('.sidebar-item-7').removeClass('li-active')
                    $('.sidebar-item-8').removeClass('li-active')
                break;
                case 2:
                    $('.sidebar-item-2').addClass('li-active')
                    $('.sidebar-item-1').removeClass('li-active')
                    $('.sidebar-item-3').removeClass('li-active')
                    $('.sidebar-item-4').removeClass('li-active')
                    $('.sidebar-item-5').removeClass('li-active')
                    $('.sidebar-item-6').removeClass('li-active')
                    $('.sidebar-item-7').removeClass('li-active')
                    $('.sidebar-item-8').removeClass('li-active')
                break;
                case 3:
                    $('.sidebar-item-3').addClass('li-active')
                    $('.sidebar-item-1').removeClass('li-active')
                    $('.sidebar-item-2').removeClass('li-active')
                    $('.sidebar-item-4').removeClass('li-active')
                    $('.sidebar-item-5').removeClass('li-active')
                    $('.sidebar-item-6').removeClass('li-active')
                    $('.sidebar-item-7').removeClass('li-active')
                    $('.sidebar-item-8').removeClass('li-active')
                break;
                case 4:
                    $('.sidebar-item-4').addClass('li-active')
                    $('.sidebar-item-1').removeClass('li-active')
                    $('.sidebar-item-2').removeClass('li-active')
                    $('.sidebar-item-3').removeClass('li-active')
                    $('.sidebar-item-5').removeClass('li-active')
                    $('.sidebar-item-6').removeClass('li-active')
                    $('.sidebar-item-7').removeClass('li-active')
                    $('.sidebar-item-8').removeClass('li-active')
                break;
                case 5:
                    $('.sidebar-item-5').addClass('li-active')
                    $('.sidebar-item-1').removeClass('li-active')
                    $('.sidebar-item-2').removeClass('li-active')
                    $('.sidebar-item-3').removeClass('li-active')
                    $('.sidebar-item-4').removeClass('li-active')
                    $('.sidebar-item-6').removeClass('li-active')
                    $('.sidebar-item-7').removeClass('li-active')
                    $('.sidebar-item-8').removeClass('li-active')
                break;
                case 6:
                    $('.sidebar-item-6').addClass('li-active')
                    $('.sidebar-item-1').removeClass('li-active')
                    $('.sidebar-item-2').removeClass('li-active')
                    $('.sidebar-item-3').removeClass('li-active')
                    $('.sidebar-item-4').removeClass('li-active')
                    $('.sidebar-item-5').removeClass('li-active')
                    $('.sidebar-item-7').removeClass('li-active')
                    $('.sidebar-item-8').removeClass('li-active')
                break;
                case 7:
                    $('.sidebar-item-7').addClass('li-active')
                    $('.sidebar-item-1').removeClass('li-active')
                    $('.sidebar-item-2').removeClass('li-active')
                    $('.sidebar-item-3').removeClass('li-active')
                    $('.sidebar-item-4').removeClass('li-active')
                    $('.sidebar-item-5').removeClass('li-active')
                    $('.sidebar-item-6').removeClass('li-active')
                    $('.sidebar-item-8').removeClass('li-active')
                break;
                case 8:
                    $('.sidebar-item-8').addClass('li-active')
                    $('.sidebar-item-1').removeClass('li-active')
                    $('.sidebar-item-2').removeClass('li-active')
                    $('.sidebar-item-3').removeClass('li-active')
                    $('.sidebar-item-5').removeClass('li-active')
                    $('.sidebar-item-6').removeClass('li-active')
                    $('.sidebar-item-7').removeClass('li-active')
                    $('.sidebar-item-4').removeClass('li-active')
                break;
            }
        }
    </script>
</body>
</html>
