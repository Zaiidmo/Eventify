@include('layouts.head')

<body class="bg-black">
    <!-- Navbar -->
    @include('layouts.header')

    <!--  Main Content -->

    @yield('content')

    @include('layouts.footer')
</body>
@yield('scripts')
@include('layouts.foot')
