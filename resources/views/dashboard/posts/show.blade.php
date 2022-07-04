@extends('dashboard.layouts.main')

@section('cointainer')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1>
                    {{ $post->title }}
                </h1>
                <img src="https://source.unsplash.com/500x500?{{ $post->category->name }}" class="img-fluid" alt="...">
                <p>
                    {{ $post->body }}
                </p>
            </div>
        </div>
    </div>
</main>
@endsection
