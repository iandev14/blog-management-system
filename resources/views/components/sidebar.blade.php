<aside :class="open ? 'w-64' : 'w-20'" class="bg-gray-800 text-white flex flex-col transition-all duration-300">
    <div class="px-4 py-4">
        <!-- Hamburger Button -->
        <button @click="open = !open" class="text-white focus:outline-none">
            <svg class="w-6 h-6" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>

        <!-- Logo -->
        <a href="{{ route('admin.dashboard') }}" class="block text-center mt-4">
            <img src="{{ asset('assets/images/logo.png') }}" :class="open ? 'w-16' : 'w-10'" class="mx-auto"
                alt="Logo">
        </a>
        <h1 :class="open ? 'block mt-4 text-center text-xl font-semibold' : 'hidden'" class="text-center">Admin Panel
        </h1>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 px-2">
        <ul class="space-y-2">
            <li>
                <a href="{{ route('admin.dashboard') }}"
                    class="py-2 px-4 rounded hover:bg-gray-700 flex items-center space-x-2">
                    <span class="material-icons">dashboard</span>
                    <span :class="open ? 'block' : 'hidden'">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.users') }}"
                    class="py-2 px-4 rounded hover:bg-gray-700 flex items-center space-x-2">
                    <span class="material-icons">people</span>
                    <span :class="open ? 'block' : 'hidden'">Manage Users</span>
                </a>
            </li>
            <li>
                <a href="#" class="py-2 px-4 rounded hover:bg-gray-700 flex items-center space-x-2">
                    <span class="material-icons">category</span>
                    <span :class="open ? 'block' : 'hidden'">Categories</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Logout Button -->
    <div class="px-4 py-4">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="w-full py-2 px-4 rounded bg-red-600 hover:bg-red-700 text-white flex items-center justify-center space-x-2">
                <span class="material-icons">logout</span>
                <span :class="open ? 'block' : 'hidden'">Logout</span>
            </button>
        </form>
    </div>
</aside>
