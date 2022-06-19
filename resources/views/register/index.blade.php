@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-center">
        <main class="col-lg-5 mb-5">
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
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" value="{{ old('username') }}">
                    <label for="floatingInput">User Name</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating my-2">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}">
                    <label for="floatingInput">Email Address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating my-2">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
                    <label for="floatingPassword">New Password</label>
                </div>
                <div class="form-floating my-2">
                    <input type="password" name="password_confirmation" class="form-control  @error('password') is-invalid @enderror" id="password_confirmation" placeholder="Password">
                    <label for="floatingPassword">Confirm New Password</label>
                    {{-- if password error --}}
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="Privacy-agreement" onclick="checkBox(this)"> I have read and agree to the terms presented in the <a href="">Privacy Policy agreement</a>.
                    </label>
                </div>

                <button class="w-100 btn btn-lg btn-secondary" id="submit" type="submit" disabled>Sign Up</button>
            </form>
            <p class="text-center">Already sign up? <a href="/login">click here to sign in.</a></p>
        </main>
    </div>
@endsection

@section('scripts')
<script>
    function checkBox(cb){
        if (cb.checked) {
            document.getElementById('submit').disabled = false;
        }else document.getElementById('submit').disabled = true;
    }
</script>
@endsection
