<nav class="flex items-center px-28 py-5 bg-gray-800 text-white sticky top-0 z-50">
    <!-- Logo -->
    <a href="{{ route('welcome') }}">
        <img src="{{ asset('assets/images/logo.png') }}" class="w-10 cursor-pointer" alt="Logo">
    </a>

    <!-- Navigation Links -->
    <ul class="flex-1 text-center">
        <li class="list-none inline-block px-5">
            <a href="{{ route('welcome') }}" class="no-underline text-white hover:underline">Home</a>
        </li>
        <li class="list-none inline-block px-5">
            <a href="#" class="no-underline text-white hover:underline">Features</a>
        </li>
        <li class="list-none inline-block px-5">
            <a href="#" class="no-underline text-white hover:underline">About Us</a>
        </li>
        <li class="list-none inline-block px-5">
            <a href="#" class="no-underline text-white hover:underline">Help</a>
        </li>
        <li class="list-none inline-block px-5">
            <a href="#" class="no-underline text-white hover:underline">Blog</a>
        </li>
        <li class="list-none inline-block px-5">
            <a href="#" class="no-underline text-white hover:underline">Contact</a>
        </li>

        @auth
            <!-- Dynamic Links Based on Role -->
            @if (auth()->user()->role === 'admin')
                <li class="list-none inline-block px-5">
                    <a href="{{ route('admin.dashboard') }}" class="no-underline text-white hover:underline">Dashboard</a>
                </li>
            @elseif(auth()->user()->role === 'author')
                <li class="list-none inline-block px-5">
                    <a href="{{ route('posts.index') }}" class="no-underline text-white hover:underline">My Posts</a>
                </li>
            @else
                <li class="list-none inline-block px-5">
                    <a href="{{ route('posts.index') }}" class="no-underline text-white hover:underline">Posts</a>
                </li>
            @endif
        @endauth
    </ul>

    <!-- Authentication Links -->
    @guest
        <a href="{{ route('login') }}"
            class="bg-gray-800 text-white px-4 py-2 rounded border-2 border-white hover:bg-gray-700">
            Login
        </a>
        <a href="{{ route('register') }}"
            class="bg-gray-800 text-white px-4 py-2 rounded border-2 border-white hover:bg-gray-700 ml-2">
            Sign Up
        </a>
    @else
        <form action="{{ route('logout') }}" method="POST" class="inline">
            @csrf
            <button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded border-2 border-white hover:bg-gray-700">
                Logout
            </button>
        </form>
    @endauth
</nav>
