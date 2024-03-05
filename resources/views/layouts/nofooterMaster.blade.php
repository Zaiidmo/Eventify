@include('layouts.head')

<body class="bg-black h-screen">
    <!-- Navbar -->
    @include('layouts.header')

    <!--  Main Content -->

    @yield('content')

</body>
@yield('scripts')
@include('layouts.foot')
