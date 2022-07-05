@extends('dashboard.layouts.main')

@section('cointainer')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1>
                    {{ $post->title }}
                </h1>

                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')"><span data-feather="trash-2"></span> Delete</button>
                </form>

                <img src="https://source.unsplash.com/500x500?{{ $post->category->name }}" class="img-fluid my-2" alt="...">
                <p>
                    {!! $post->body !!}
                </p>
            </div>
        </div>
    </div>
</main>
@endsection
