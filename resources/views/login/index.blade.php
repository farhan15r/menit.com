@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-center">
        <main class="col-md-5 my-5">
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('loginError') }}</strong> Please try again!.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <h1 class="h1 fw-normal text-center">Sign In</h1>
            <span class="text-center">Please enter your registered account</span>

            <form action="/login" method="post">
            @csrf
                <div class="form-floating mt-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus value="{{ old('email') }}">
                    <label for="floatingInput">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
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
            <p class="text-center">Don't have account? <br> Don't worry!, <a href="">click here to register now.</a></p>
        </main>
    </div>
@endsection
