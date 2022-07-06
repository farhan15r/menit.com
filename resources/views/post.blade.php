@extends('layouts.main')

@section('container')

    <div class="row mb-2 justify-content-center">
        <div class="col-md-8">
            <h1>
                {{ $post->title }}
            </h1>
            <p class="fw-light">Created at {{ $post->created_at->format('d-M-Y') }}. By. {{ $post->author->name }}, in {{ $post->category->name }} category</p>
            @if ($post->image)
                <div style="max-height: 400px; overflow:hidden">
                    <img src="/storage/{{ $post->image }}" class="img-fluid my-2" alt="">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x500?{{ $post->category->name }}" class="img-fluid my-2" alt="">
            @endif
            <p>
                {!! $post->body !!}
            </p>
        </div>
    </div>

@endsection
