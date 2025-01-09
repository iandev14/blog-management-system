@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="px-8 py-6">
        <h1 class="text-3xl font-bold mb-6">Admin Dashboard</h1>

        <!-- Statistics Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Total Posts -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-lg font-semibold text-gray-700">Total Posts</h2>
                <p class="text-3xl font-bold text-gray-900">{{ $totalPosts }}</p>
            </div>

            <!-- Total Categories -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-lg font-semibold text-gray-700">Total Categories</h2>
                <p class="text-3xl font-bold text-gray-900">{{ $totalCategories }}</p>
            </div>

            <!-- Total Users -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-lg font-semibold text-gray-700">Total Users</h2>
                <p class="text-3xl font-bold text-gray-900">{{ $totalUsers }}</p>
            </div>
        </div>

        <!-- Latest Posts Section -->
        <div class="mt-8">
            <h2 class="text-2xl font-semibold mb-4">Latest Posts</h2>
            <table class="w-full border-collapse border border-gray-300">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">Title</th>
                        <th class="border border-gray-300 px-4 py-2">Author</th>
                        <th class="border border-gray-300 px-4 py-2">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($latestPosts as $post)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $post->title }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $post->user->name }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $post->created_at->format('M d, Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center py-4">No posts available.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
