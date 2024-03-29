<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('meta', 'Le site des
adhérents')">
    <title>Club Va'a - @yield('title')</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
</head>
<body>
@include('layouts.navbar')
@include('layouts.header')
<div class="container">
    @yield('content')
</div>
@include('layouts.footer')
@yield('script')
{{--<script src="/js/app.js"></script>--}}
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
