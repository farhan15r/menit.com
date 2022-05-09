@extends('layouts.main')

@section('container')
<div class="text-white rounded shadow" style="background-image: url('https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}'); background-repeat: no-repeat;  background-position: right; background-repeat: no-repeat;
    background-height: 100%">
    <div class="p-4 p-md-5 mb-4 rounded" style="background: linear-gradient(to right, rgb(24, 24, 24), rgb(37, 36, 36), rgba(37, 36, 36, 0.723), rgba(255, 255,  255, 0))">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">{{ $posts[0]->title }}</h1>
            <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's mostinteresting in this post's contents.</p>
            <p class="lead mb-0"><a href="/post/{{ $posts[0]->slug }}" class="text-white fw-bold">Continue reading...</a></p>
        </div>
    </div>
</div>

<div class="row mb-2">
    @foreach ($posts->skip(1) as $post)
    <div class="col-md-6">
        <div class="shadow row g-0 border rounded overflow-hidden flex-md-row mb-4 h-md-250 position-relative" style="
        background-image: url('https://source.unsplash.com/500x500?{{ $post->category->name }}');
        background-position: right;
        background-repeat: no-repeat;
        background-height: 100%;">
            <div style="background: linear-gradient(to right, white, white, rgba(255, 255, 255, 0))">
                <div class="col-lg-8 p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">{{ $post->category->name }}</strong>
                    <h4 class="mb-0">{{ $post->title }}</h4>
                    <div class="mb-1 text-muted">Nov 12</div>
                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="/post/{{ $post->slug }}" class="">Continue reading</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection

