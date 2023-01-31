@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h2>{{ ucfirst($post->title) }}</h2>
        @if ($post->uploaded_img)
            <img src="{{ asset('storage/' . $post->uploaded_img) }}" alt="{{ $post->title }} image">
        @else
            <img src="{{ $post->image }}" alt="{{ $post->title }} image">
        @endif
        <p class="content">{{ $post->content }}</p>
    </div>
@endsection
<style>
    img {
        margin: 2rem 0;
        max-width: 750px;
    }

    .content {
        text-align: left;
    }
</style>
