<div class="navbar-dark sticky-top bg-white shadow mb-5">
    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center pb-3">
                <div class="col-4 py-2">
                <a class="link-secondary" href="#">Subscribe</a>
                </div>
                <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="/">Menit.com</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <button class="btn link-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#searchMenu">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                    </button>
                <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
                </div>
            </div>

            <div class="collapse" id="searchMenu">
                <form class="input-group" action="/search" method="get">
                    <input type="text" class="form-control" id="query" name='query' placeholder="Search..." value="{{ request('query') }}">
                    <button class="input-group-text" type="submit">Search</button>
                </form>
            </div>
        </header>


        <div class="nav-scroller mb-2">
            <nav class="nav d-flex justify-content-between">
                @foreach ($categories as $category)
                    <a class="p-2 link-secondary" href="#">{{ $category->name }}</a>
                @endforeach
            </nav>
        </div>
    </div>
</div>
