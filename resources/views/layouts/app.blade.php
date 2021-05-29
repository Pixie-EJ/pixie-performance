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
    <script src="{{ asset('js/datatables.min.js') }}" defer></script>
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <script src="toastr.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> 
    <script src="https://cdn.datatables.net/plug-ins/1.10.22/sorting/date-eu.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.10.22/sorting/chinese-string.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.10.13/features/mark.js/datatables.mark.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.10.22/filtering/type-based/accent-neutralise.js"></script> 
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datatables.min.css') }}" rel="stylesheet">
    <link href="toastr.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    
    
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
        $(document).ready( function () {
            $('#events-table').DataTable({
                scrollY: "500px",
                columnDefs: [
                    // { orderable: false, targets: [3,4]},
                    { type: "date-eu", targets: [3,4] },
                    { type: "chinese-string", targets: [1, 2] }
                ],
                order: [[1, "asc"]],
                language: {
                    url:
                        "https://cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese-Brasil.json"
                }
            });
        });
    </script>

    @yield('scripts')

</body>
</html>
