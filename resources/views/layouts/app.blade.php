<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials._head')
</head>
<body>

@include('partials._header')

<main class="wrapper py-4">
    @yield('content')
</main>

@include('partials._footer')


<!-- Box Icons -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/dist/boxicons.min.js"></script>

<!-- Aos Animate -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<!-- Bootstrap -->
<script src="{{ asset('js/app.js') }}" defer></script>
@yield('scripts')

</body>
</html>
