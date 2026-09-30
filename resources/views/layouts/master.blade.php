<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#05080d">
    <meta name="description" content="@yield('meta_description', 'Devize Tech Solutions builds thoughtful digital products, software and experiences for ambitious businesses.')">
    <title>@yield('title', 'Devize Tech Solutions') | Devize Tech Solutions</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=dm-sans:400,500,600,700|space-grotesk:400,500,600,700" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
</head>
<body class="min-h-screen overflow-x-hidden bg-[#05080d] font-sans text-[#f4f7fb] antialiased">
    @include('components.header')

    @yield('content')

    @include('components.footer')
</body>
</html>
