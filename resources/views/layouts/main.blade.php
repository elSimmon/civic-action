<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('partials.head')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
@include('sweetalert::alert')

<div id="app" class="wrapper">
    <div class="preloader"></div>

    <!-- Main Header Nav -->
    @include('front.partials.nav')

    <!-- Main Header Nav For Mobile -->
    @include('partials.mobile_header_nav')

    <main>
        @yield('content')
    </main>

    <!-- Our Footer -->
    @include('partials.footer')

    {{--    scroll to top arrow--}}
    <a class="scrollToHome" href="#"><i class="fa fa-angle-up"></i></a>
</div>

    @include('partials.scripts')
</body>
</html>
