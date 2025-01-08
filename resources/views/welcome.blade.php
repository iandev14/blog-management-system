<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src='https://cdn.tailwindcss.com'></script>
</head>

<body>
    <div class="container min-h-screen bg-[url('assets/images/background.jpg')] bg-center bg-cover px-28 py-5 relative">
        <nav class="flex items center">
            <img src="{{ asset('assets/images/logo.png') }}" class="w-10 cursor-pointer ">
            <ul class="flex-1 text-center">
                <li class="list-none inline-block px-5"><a href="#" class="no-underline text-white">Home</a></li>
                <li class="list-none inline-block px-5"><a href="#" class="no-underline text-white">Features</a>
                </li>
                <li class="list-none inline-block px-5"><a href="#" class="no-underline text-white">About Us</a>
                </li>
                <li class="list-none inline-block px-5"><a href="#" class="no-underline text-white">Help</a></li>
                <li class="list-none inline-block px-5"><a href="#" class="no-underline text-white">Blog</a></li>
                <li class="list-none inline-block px-5"><a href="#" class="no-underline text-white">Contact</a>
                </li>
                <li class="list-none inline-block px-5"><a href="#" class="no-underline text-white">Login</a></li>
            </ul>
            <button type="submit"
                class="bg-gray-800 text-white px-4 py-2 rounded border-2 border-white hover:bg-gray-700">Sign
                Up</button>
        </nav>

        <div class="text-white mt-48 max-w-xl">
            <h1 class="text-7xl font-semibold leading-normal">Blog Mastery</h1>
            <h2 class="text-5xl font-semibold leading-normal"><span class="font-light">Easily manage and profit from
                    your content.</span></h2>
            <p>Simplify your blogging process, manage your content effortlessly, and unlock new opportunities to earn by
                sharing your passion with Blog Management!</p>
        </div>

        <div class="mt-10">
            <form action="">
                <input type="text" placeholder="Enter your email"
                    class="py-5 px-3 font-medium w-96 border-2 border-gray-800">
                <button type="submit"
                    class="bg-gray-800 text-white px-10 py-5 rounded border-2 border-white hover:bg-gray-700">Sign
                    Up</button>
            </form>
        </div>
        <img src="{{ asset('assets/images/person-with-laptop.png') }}"
            class="w-5/12 xl:w-w-3/12 xl:absolute bottom-0 right-10 object-cover">
    </div>
</body>

</html>
