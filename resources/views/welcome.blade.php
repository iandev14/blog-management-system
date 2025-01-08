@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<div class="container min-h-screen bg-[url('assets/images/background.jpg')] bg-center bg-cover px-28 py-5">
    <div class="text-white mt-20 max-w-xl">
        <h1 class="text-7xl font-semibold leading-normal">Blog Mastery</h1>
        <h2 class="text-5xl font-semibold leading-normal"><span class="font-light">Easily manage and profit from your content.</span></h2>
        <p>Simplify your blogging process, manage your content effortlessly, and unlock new opportunities to earn by sharing your passion with Blog Management!</p>
    </div>

    <div class="mt-10">
        <form action="">
            <input type="text" placeholder="Enter your email" class="py-5 px-3 font-medium w-96 border-2 border-gray-800">
            <button type="submit" class="bg-gray-800 text-white px-10 py-5 rounded border-2 border-white hover:bg-gray-700">Sign Up</button>
        </form>
    </div>
    <img src="{{ asset('assets/images/person-with-laptop.png') }}" class="w-7/12 xl:w-5/12 xl:absolute bottom-0 right-10 object-cover">
</div>
@endsection