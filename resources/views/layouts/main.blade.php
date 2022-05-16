<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.88.1">
        <title>Menit.com</title>

        {{-- <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/"> --}}
        {{-- <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/"> --}}

        <!-- Bootstrap core CSS -->
        <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                    .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
        <!-- Custom styles for this template -->
            <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
        <!-- Custom styles for this template -->
            <link href="/css/blog.css" rel="stylesheet">
        <!-- Custom styles for signin template -->
            <link href="/css/signin.css" rel="stylesheet">
    </head>

    <body>
        @include('partials.navbar')

        <main class="container">
            @yield('container')
        </main>

        <footer class="blog-footer">
            <p>Blog builded by <a href="https://instagram.com/farhan15r">Farhan Ramadhan</a>.</p>
            <p>Using: <a href="https://laravel.com/">Laravel 9</a> and <a href="https://getbootstrap.com/">Bootsrap</a>.</p>
            <p>
                <a href="#">Back to top</a>
            </p>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        @include('partials.navbarScript')
        @yield('scripts')
    </body>
</html>
