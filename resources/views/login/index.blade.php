@extends('layouts.main')

@section('container')
    <div class="text-center">
        <main class="form-signin my-5">
            <form>

                <h1 class="h1 fw-normal">Sign In</h1>

                <span>Please enter your registered account</span>

                <div class="form-floating mt-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
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
