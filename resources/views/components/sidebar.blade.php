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
