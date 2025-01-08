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
    <aside class="w-64 bg-gray-800 text-white flex flex-col py-6">
        <div class="px-6 mb-6">
            <img src="{{ asset('assets/images/logo.png') }}" class="w-16 mx-auto mb-4" alt="Logo">
            <h1 class="text-center text-xl font-semibold">Admin Panel</h1>
        </div>
        <nav class="flex-1">
            <ul class="space-y-4 px-6">
                <li><a href="{{ route('admin.dashboard') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Dashboard</a></li>
                <li><a href="{{ route('admin.users') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Manage Users</a></li>
                <li><a href="{{ route('admin.categories') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Categories</a></li>
                <li><a href="{{ route('admin.posts') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Posts</a></li>
                <li><a href="{{ route('admin.comments') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Comments</a></li>
                <li><a href="{{ route('admin.settings') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Settings</a></li>
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
        <header class="flex items-center justify-between bg-white py-4 px-6 shadow">
            <h1 class="text-2xl font-semibold">{{ $title ?? 'Admin Dashboard' }}</h1>
            <div>
                <button class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700">Logout</button>
            </div>
        </header>
        <div class="mt-6">
            {!! $slot !!}
        </div>
    </main>
</body>

</html>
