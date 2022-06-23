<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Bootstrap CSS -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<!-- Custom CSS -->
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- AOS Animate -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<!-- Box Icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css" rel="stylesheet">

@yield('styles')

<!-- Favicon -->
<link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" />

<title>CMS | @yield('title')</title>
