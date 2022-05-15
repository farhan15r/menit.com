@extends('layouts.main')

@section('container')
    <div class="text-center">
        <main class="form-signin my-5">
            <h1 class="h1 fw-normal">Sign In</h1>
            <span>Please enter your registered account</span>

            <form action="/login" method="post">
            @csrf
                <div class="form-floating mt-3">
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" autofocus>
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form>
            <span>Don't have account? <br> Don't worry!, <a href="">click here to register now.</a></span>
        </main>
    </div>
@endsection
