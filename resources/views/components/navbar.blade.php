<nav class="flex items-center px-28 py-5 bg-gray-800 text-white sticky top-0 z-50">
    <!-- Logo -->
    <img src="{{ asset('assets/images/logo.png') }}" class="w-10 cursor-pointer">

    <!-- Navigation Links -->
    <ul class="flex-1 text-center">
        <li class="list-none inline-block px-5">
            <a href="{{ route('welcome') }}" class="no-underline text-white">Home</a>
        </li>
        <li class="list-none inline-block px-5">
            <a href="#" class="no-underline text-white">Features</a>
        </li>
        <li class="list-none inline-block px-5">
            <a href="#" class="no-underline text-white">About Us</a>
        </li>
        <li class="list-none inline-block px-5">
            <a href="#" class="no-underline text-white">Help</a>
        </li>
        <li class="list-none inline-block px-5">
            <a href="#" class="no-underline text-white">Blog</a>
        </li>
        <li class="list-none inline-block px-5">
            <a href="#" class="no-underline text-white">Contact</a>
        </li>
        <li class="list-none inline-block px-5">
            <a href="{{ route('login') }}" class="no-underline text-white">Login</a>
        </li>
    </ul>

    <!-- Sign Up Button -->
    <a href="{{ route('register') }}"
        class="bg-gray-800 text-white px-4 py-2 rounded border-2 border-white hover:bg-gray-700">
        Sign Up
    </a>
</nav>
