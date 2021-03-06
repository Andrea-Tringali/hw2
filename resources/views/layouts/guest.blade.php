<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} @yield('title')</title>

    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel='stylesheet' href='{{ asset('css/signup.css') }}'>
    @yield('script')
    
</head>
<body>
    <main>
        <section class="main_left">
            
        </section>
        <section class="main_right">
            @yield('content')
        </section>
    </main>
</body>
</html>


<!--
<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
{{ __('Logout') }}
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
-->