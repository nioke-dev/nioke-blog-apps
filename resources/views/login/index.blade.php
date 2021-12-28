@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-4">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
            @endif

            <main class="form-signin">

                <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>

                <form action="/login" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="inputEmail" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                        <label for="inputEmail">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        <label for="password" required>Password</label>
                    </div>


                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

                    <p class="mb-3 text-muted">Copyright Nioke-Dev 2021/2022</p>

                </form>

                <small class="d-block text-center">Not Registered? <a href="/register">Register Now!!</a></small>
            </main>
        </div>
    </div>
@endsection
