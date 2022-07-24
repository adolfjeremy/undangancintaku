@extends('layouts.main')

@section('page-title')
    Login | UndanganCintaku
@endsection

@section('content')
    <section id="login">
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
                                <label for="inputEmail" class="form-label">Email</label>
                                <input id="email" type="email" class="form-control w-100 @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="inputPassword" class="form-label">Password</label>
                                <input id="password" type="password" class="form-control w-100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            </div>
                            <button type="submit" class="btn btn-lg btn_auth btn-block mt-2 w-100">Masuk</button>
                            <p class="text-center mt-4">Atau masuk dengan Google</p>
                            <a href="#" class="btn btn-lg btn_google_auth btn-block mt-2 w-100 d-flex align-items-center justify-content-center"><img class="me-2" src="/assets/images/google-logo.png" alt="logo Google"><span>Google</span></a>
                        </form>
                    </div>
                    <div class="col-12 text-center mt-4">
                        <p>Belum memiliki akun?<a href="{{ route('register') }}"> Daftar</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection