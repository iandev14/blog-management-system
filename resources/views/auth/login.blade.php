@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-[url('assets/images/background.jpg')] bg-center bg-cover px-28 py-5">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-center mb-6">Login to Your Account</h2>
        
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <!-- Email Input -->
            <x-input id="email" label="Email" type="email" name="email" placeholder="Enter your email" />
            
            <!-- Password Input -->
            <x-input id="password" label="Password" type="password" name="password" placeholder="Enter your password" />

            <div class="flex items-center justify-between mb-6">
                <x-checkbox id="remember" name="remember" label="Remember me"/>
                <a href="#" class="text-sm text-gray-800 hover:underline">Forgot password?</a>
            </div>

            <x-button>
                Login
            </x-button>
        </form>

        <p class="mt-6 text-center text-sm text-gray-600">
            Don't have an account? <a href="#" class="text-gray-800 hover:underline">Sign up</a>
        </p>
    </div>
</div>
@endsection
