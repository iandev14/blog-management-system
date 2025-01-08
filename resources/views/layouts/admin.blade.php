<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Admin Dashboard' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 min-h-screen text-gray-800 flex">
    <!-- Sidebar -->
    <x-sidebar />

    <!-- Main Content -->
    <main class="flex-1 p-8">
        <!-- Navbar -->
        <x-navbar />

        <!-- Page Title -->
        <header class="flex items-center justify-between bg-white py-4 px-6 shadow">
            <h1 class="text-2xl font-semibold">{{ $title ?? 'Admin Dashboard' }}</h1>
            <div>
                <button class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700">Logout</button>
            </div>
        </header>

        <!-- Slot for Admin Content -->
        <div class="mt-6">
            {!! $slot !!}
        </div>
    </main>
</body>

</html>
