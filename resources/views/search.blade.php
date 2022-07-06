@php
    function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}
@endphp

@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-center">
    <div style="max-width: 800px">
        <p class="fs-5">Search result <strong>"{{ $query }}"</strong>, {{ count($posts) }} result founded.</p>
        @foreach ($posts as $post)
            <div class="card mb-3" id="post" onmousemove="on(this)" onmouseout="off(this)">
                <div class="row g-0">
                    <div class="col-4" style="height: 150px; overflow: hidden;">
                        <img src="{{ $post->image ? '/storage/' . $post->image : 'https://source.unsplash.com/1200x500?' . $post->category->name  }}" class="img-fluid rounded-start" alt="" style="height: 100%">
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <a href="/post/{{ $post->slug }}" class="stretched-link"></a>
                            <strong class="d-inline-block mb-2 text-primary">{{ $post->category->name }}</strong>
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text"><small class="text-muted">{{ time_elapsed_string($post->created_at) }}</small></p>
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
