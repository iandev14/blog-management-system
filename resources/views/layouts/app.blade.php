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
    <nav class="flex items-center px-10 py-5 bg-black bg-opacity-50">
        <img src="{{ asset('assets/images/logo.png') }}" class="w-10 cursor-pointer" alt="Logo">
        <ul class="flex-1 text-center">
            <li class="inline-block px-5"><a href="#" class="no-underline hover:underline">Home</a></li>
            <li class="inline-block px-5"><a href="#" class="no-underline hover:underline">Features</a></li>
            <li class="inline-block px-5"><a href="#" class="no-underline hover:underline">About Us</a></li>
            <li class="inline-block px-5"><a href="#" class="no-underline hover:underline">Help</a></li>
            <li class="inline-block px-5"><a href="#" class="no-underline hover:underline">Blog</a></li>
            <li class="inline-block px-5"><a href="#" class="no-underline hover:underline">Contact</a></li>
            <li class="inline-block px-5"><a href="#" class="no-underline hover:underline">Login</a></li>
        </ul>
        <button type="button"
            class="bg-gray-800 text-white px-4 py-2 rounded border-2 border-white hover:bg-gray-700">
            Sign Up
        </button>
    </nav>

    <!-- Main Content -->
    <div class="flex-1 px-10 py-10">
        {!! $slot !!}
    </div>

    <!-- Footer -->
    <footer class="bg-black bg-opacity-50 text-center py-4">
        <p>&copy; {{ date('Y') }} Blog Management System. All Rights Reserved.</p>
    </footer>
</body>

</html>
