<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials._head')
</head>
<body>

<div id="app">

    @include('partials._header')

    <main class="wrapper py-4">
        @yield('content')
    </main>

    @include('partials._footer')

</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
@yield('scripts')

</body>
</html>
