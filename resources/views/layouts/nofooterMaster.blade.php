@include('layouts.head')

<body class="bg-black">
    <!-- Navbar -->
    @include('layouts.header')

    <!--  Main Content -->

    @yield('content')

</body>
@yield('scripts')
@include('layouts.foot')
