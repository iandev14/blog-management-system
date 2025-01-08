<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

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

    <!-- Hero Section -->
    <div class="flex flex-col lg:flex-row items-center justify-between px-10 mt-24 flex-1">
        <!-- Text Content -->
        <div class="max-w-xl">
            <h1 class="text-5xl lg:text-7xl font-bold mb-4">Blog Mastery</h1>
            <h2 class="text-3xl lg:text-5xl font-light mb-6">Easily manage and profit from your content.</h2>
            <p class="text-lg mb-8">
                Simplify your blogging process, manage your content effortlessly, and unlock new opportunities to earn
                by sharing your passion with Blog Management!
            </p>
            <!-- Email Signup Form -->
            <form class="flex flex-col sm:flex-row gap-4">
                <input type="email" placeholder="Enter your email"
                    class="py-3 px-4 text-gray-800 rounded border-2 border-gray-800 focus:outline-none flex-1">
                <button type="submit"
                    class="bg-gray-800 text-white px-6 py-3 rounded border-2 border-white hover:bg-gray-700">
                    Sign Up
                </button>
            </form>
        </div>

        <!-- Image -->
        <div class="mt-10 lg:mt-0 lg:absolute lg:bottom-0 lg:right-10 w-full lg:w-5/12">
            <img src="{{ asset('assets/images/person-with-laptop.png') }}" alt="Person with laptop"
                class="object-contain w-full h-auto">
        </div>
    </div>
</body>

</html>
