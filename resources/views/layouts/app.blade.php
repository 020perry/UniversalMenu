<!-- resources/views/layouts/master.blade.php -->




<!DOCTYPE html>
<html data-theme="cupcake" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Laravel Menu')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div class="container bg-base-100">
    @yield('content')
</div>
</body>
</html>
