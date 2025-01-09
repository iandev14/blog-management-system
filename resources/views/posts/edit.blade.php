@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
    <div class="px-28 py-10">
        <h1 class="text-3xl font-bold mb-6">Edit Post</h1>

        <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- Title Input -->
            <x-input id="title" label="Title" type="text" name="title" placeholder="Enter the post title"
                value="{{ $post->title }}" />

            <!-- Content Textarea -->
            <div class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                <textarea id="content" name="content" rows="6"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-gray-500"
                    placeholder="Enter the post content">{{ $post->content }}</textarea>
            </div>

            <!-- Image Input -->
            <x-input id="image" label="Image" type="file" name="image" placeholder="Upload an image" />
            @if ($post->image)
                <p class="text-sm text-gray-600 mt-2">Current Image: <a href="{{ asset('storage/' . $post->image) }}"
                        target="_blank" class="text-blue-600 hover:underline">View</a></p>
            @endif

            <!-- Submit Button -->
            <x-button>
                Update Post
            </x-button>
        </form>
    </div>
@endsection
