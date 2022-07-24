@extends('layouts.main')

@section('page-title')
    Daftar | UndanganCintaku
@endsection

@section('content')
    <section id="signup">
        <div class="container position-relative">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-lg-5 mt-4">
                    <div class="row">
                        @if (session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('loginError') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <form method="POST" action="" class="mt-3 w-100">
                        @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input id="name" type="text" class="form-control w-100 @error('name') is-invalid @endError" name="name" autocomplete="email" autofocus value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="email" class="form-control w-100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="inputPassword" class="form-label">Password</label>
                                <input id="password" type="password" class="form-control w-100 @error('password') is-invalid @enderror" name="password" required>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-lg btn_auth btn-block mt-2 w-100">Dafter</button>
                            <p class="text-center mt-4">Atau daftar dengan Google</p>
                            <a href="#" class="btn btn-lg btn_google_auth btn-block mt-2 w-100 d-flex align-items-center justify-content-center"><img class="me-2" src="/assets/images/google-logo.png" alt="logo Google"><span>Google</span></a>
                        </form>
                    </div>
                    <div class="col-12 text-center mt-4">
                        <p>Sudah memiliki akun?<a href="{{ route('login') }}"> Masuk</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection