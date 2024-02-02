<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-950 antialiased">
    <h1 class="text-red-400">Teste</h1>
    <img src="{{ asset('imgs/logo.png') }}" alt="">
    <img src="{{ asset('imgs/banner-55off.png') }}" alt="">

    <h1 class="text-4xl text-[#165F0F]">Cor Green Figma</h1>
    <h1 class="text-4xl">Cor Green Tailwind</h1>
</body>

</html>
