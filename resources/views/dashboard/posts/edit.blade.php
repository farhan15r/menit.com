@extends('dashboard.layouts.main')

@section('cointainer')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Post</h1>
    </div>

    <div class="col-lg-8">
        <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="mb-4" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" autofocus value="{{ old('title', $post->title) }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ $post->slug }}" readonly>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" id="category" name="category_id">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id', $post->category_id)==$category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <label for="image" class="form-label">Post image</label>
                <img id="frame" src="{{ $post->image ? '/storage/' . $post->image : '' }}" class="img-fluid d-flex mb-2" style="max-width: 40%"/>
                <input class="form-control  @error('image') is-invalid @enderror" type="file" id="image" name="image" accept=".png, .jpg, .jpeg" onchange="preview()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                <trix-editor input="body"></trix-editor>
                @error('body')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>
</main>

<script>
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })

    function preview() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }
</script>
@endsection
