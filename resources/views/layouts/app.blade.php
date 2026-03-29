<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body class="nk-body bg-lighter npc-default has-sidebar no-touch nk-nio-theme">
    <div class="nk-app-root">
        @include('partials.sidebar')

        <div class="nk-main">
            <div class="nk-wrap">
                @include('partials.navbar')

                <div class="nk-content">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>

                @include('layouts.footer')
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            if (typeof feather !== 'undefined') {
                feather.replace();
            }
        });
    </script>
</body>
</html>