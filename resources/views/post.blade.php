@extends('layouts.main')

@section('container')

    <div class="container">
        <img src="https://source.unsplash.com/500x500?{{ $post->category->name }}" alt="">
        <h1>
            {{ $post->title }}
        </h1>
        <p>
            {{ $post->body }}
        </p>
    </div>

@endsection
