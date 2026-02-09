<html>
@include('layouts.head')
<body class="nk-body bg-lighter npc-default has-sidebar no-touch nk-nio-theme">
    <div class="main-wrapper">
        @yield('content')
    </div>

    @include('layouts.footer')
</body>
</html>
