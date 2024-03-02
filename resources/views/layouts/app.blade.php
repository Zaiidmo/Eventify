@include('layouts.head')

<body class="bg-black h-screen">
    <!-- Navbar -->
    @include('layouts.header')

    <!--  Main Content -->

    @yield('content')

    @include('layouts.footer')
</body>
@yield('scripts')
@include('layouts.foot')
