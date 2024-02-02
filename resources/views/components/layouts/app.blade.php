<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'TECH Store' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="container mx-auto bg-slate-950 text-white antialiased">
    {{ $slot }}
</body>

</html>
