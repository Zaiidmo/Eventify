@include('layouts.head')

<body class="bg-black">
    <!-- Navbar -->
    @include('layouts.sidebar')

    <!--  Main Content -->

    @yield('content')

</body>
@yield('scripts')
@include('layouts.foot')
