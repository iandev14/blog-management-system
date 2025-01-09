@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <div class="px-28 py-10">
        <h1 class="text-3xl font-bold mb-6">Posts</h1>

        <!-- Button to Create Post (Only for Authors) -->
        @if (auth()->check() && auth()->user()->role === 'author')
            <div class="mb-6">
                <a href="{{ route('posts.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Create New Post
                </a>
            </div>
        @endif

        <!-- Posts Table -->
        <table class="w-full border-collapse border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border border-gray-300 px-4 py-2">Title</th>
                    <th class="border border-gray-300 px-4 py-2">Author</th>
                    <th class="border border-gray-300 px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $post->title }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $post->user->name }}</td>
                        <td class="border border-gray-300 px-4 py-2 flex space-x-2">
                            <!-- View Post -->
                            <a href="{{ route('posts.show', $post) }}" class="text-blue-600 hover:underline">View</a>

                            <!-- Edit & Delete (Only for Authors) -->
                            @if (auth()->check() && auth()->user()->role === 'author' && auth()->user()->id === $post->user_id)
                                <a href="{{ route('posts.edit', $post) }}" class="text-green-600 hover:underline">Edit</a>
                                <form action="{{ route('posts.destroy', $post) }}" method="POST"
                                    onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center py-4">No posts available.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="mt-6">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
