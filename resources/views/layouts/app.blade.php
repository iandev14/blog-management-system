<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Blog Management System' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body class="bg-hero-pattern bg-center bg-cover min-h-screen text-white flex flex-col">
    <!-- Navigation -->
    <x-navbar />

    <!-- Main Content -->
    <div class="flex-1 px-10 py-10">
        {!! $slot !!}
    </div>

    <!-- Footer -->
    <x-footer />
</body>

</html>
