<div class="navbar-dark sticky-top bg-white shadow mb-5">
    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4">
                    <button class="btn link-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#searchMenu" onclick="focusMethod()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                    </button>
                </div>
                <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="/">Menit.com</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                @auth
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        </svg>
                        <span>
                            {{ auth()->user()->name }}
                        </span>
                    </button>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/dashboard/">Dashboard</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button class="dropdown-item" type="submit">Log out</button>
                            </form>
                            {{-- <a class="dropdown-item" href="/logout">Log Out</a> --}}
                        </li>
                    </ul>
                </div>
                @else
                    <a class="btn btn-sm btn-secondary mx-2" href="/login">Sign in</a>
                    <a class="btn btn-sm btn-outline-secondary d-none d-sm-block" href="/register">Sign up</a>
                @endauth
                </div>
            </div>

            <div class="collapse" id="searchMenu">
                <form class="input-group pt-3" action="/search" method="get">
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
