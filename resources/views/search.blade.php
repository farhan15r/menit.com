@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-center">
    <div style="max-width: 800px">
        <p class="fs-5">Hasil pencarian <strong>"{{ $query }}"</strong>, {{ count($posts) }} hasil di temukan.</p>
        @foreach ($posts as $post)
            <div class="card mb-3" id="post" onmousemove="on(this)" onmouseout="off(this)">
                <div class="row g-0">
                    <div class="col-4" style="max-height: 180px; overflow: hidden;">
                        <img src="https://source.unsplash.com/500x800?{{ $post->category->name }}" class="img-fluid rounded-start" alt="">
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <a href="/post/{{ $post->slug }}" class="stretched-link"></a>
                            <strong class="d-inline-block mb-2 text-primary">{{ $post->category->name }}</strong>
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

@section('scripts')
    <script>
        function on(over) {
            over.classList.add("shadow");
        }
        function off(over){
            over.classList.remove("shadow");
        }
    </script>
@endsection
