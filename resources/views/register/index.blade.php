@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-center">
        <main class="col-md-5 mb-5">
            <h1 class="h1 fw-normal text-center">Sign Up</h1>
            <p class="text-center">Please fill the following fields with your information.</p>

            <form action="/register" method="post">
            @csrf
                <div class="form-floating my-2">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="full name" autofocus value="{{ old('name') }}">
                    <label for="floatingInput">Full Name</label>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating my-2">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"placeholder="name@example.com" autofocus value="{{ old('email') }}">
                    <label for="floatingInput">Email Address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating my-2">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    <label for="floatingPassword">New Password</label>
                </div>
                <div class="form-floating my-2">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    <label for="floatingPassword">Retype New Password</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> I have read and agree to the terms presented in the Privacy Policy agreement.
                    </label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
            </form>
        </main>
    </div>
@endsection
