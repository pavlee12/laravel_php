@extends('layouts.app')

@section('content')
    <h1>Blog Posts</h1>
    @foreach ($posts as $post)
        <h2><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h2>
        <p>by {{ $post->user->name }}</p>
    @endforeach
    <a href="{{ route('posts.create') }}">Create New Post</a>
@endsection
