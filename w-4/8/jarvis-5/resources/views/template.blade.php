<!DOCTYPE html>
<html lang="en">

@include('partials._head')

<body class="sb-nav-fixed">

    @include('partials._nav')

    <div id="layoutSidenav">

        @include('partials._sidebar')

        <div id="layoutSidenav_content">
            <main>
              @yield('content')
            </main>
            @include('partials._footer')
        </div>
    </div>
    @include('partials._scripts')
</body>

</html>
