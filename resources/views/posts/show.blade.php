@extends('layouts.app')

@section('title', $post->title)

@section('content')
<div class="px-28 py-10">
    <h1 class="text-3xl font-bold mb-6">{{ $post->title }}</h1>

    <div class="mb-6">
        <p class="text-sm text-gray-600">By {{ $post->user->name }} | {{ $post->created_at->format('M d, Y') }}</p>
    </div>

    @if ($post->image)
    <div class="mb-6">
        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full rounded-lg">
    </div>
    @endif

    <div class="mb-6">
        <p class="text-gray-800">{{ $post->content }}</p>
    </div>

    <a href="{{ route('posts.index') }}" class="text-blue-600 hover:underline">Back to Posts</a>
</div>
@endsection
