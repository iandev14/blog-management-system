@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-[url('assets/images/background.jpg')] bg-center bg-cover px-28 py-5">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-center mb-6">Create an Account</h2>
        
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <!-- Name Input -->
            <x-input id="name" label="Name" type="text" name="name" placeholder="Enter your full name" />
            
            <!-- Email Input -->
            <x-input id="email" label="Email" type="email" name="email" placeholder="Enter your email" />
            
            <!-- Password Input -->
            <x-input id="password" label="Password" type="password" name="password" placeholder="Enter your password" />
            
            <!-- Confirm Password Input -->
            <x-input id="password_confirmation" label="Confirm Password" type="password" name="password_confirmation" placeholder="Confirm your password" />

            <div class="flex items-center justify-between mb-6">
                <x-checkbox id="terms" name="terms" label="I agree to the terms and conditions" />
            </div>

            <x-button>
                Register
            </x-button>
        </form>

        <p class="mt-6 text-center text-sm text-gray-600">
            Already have an account? <a href="{{ route('login') }}" class="text-gray-800 hover:underline">Login</a>
        </p>
    </div>
</div>
@endsection
