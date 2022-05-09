@extends('layouts.main')

@section('container')

    <div class="row mb-2">
        <div class="col-md-8">
            <img src="https://source.unsplash.com/500x500?{{ $post->category->name }}" class="img-fluid" alt="...">
            <h1>
                {{ $post->title }}
            </h1>
            <p>
                {{ $post->body }}
            </p>
        </div>
    </div>

@endsection
