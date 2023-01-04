@extends('layouts.app')

@section('content')
<div class="container">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="w-50" style="background-image: url(asset/img/logo.png); background-repeat: no-repeat; background-position: center center;">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign Up</h3>
                                </div>
                            </div>


                            <form method="POST" action="{{ route('register') }}" class=" signin-form">

                                @csrf

                                <div class="form-group mb-3">
                                    <label for="name" class="label">{{ __('Name') }}</label>
                                    <input id="name" type="text"
                                        class="form-control form-control-sm @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="email" class="label">{{ __('Email Address') }}</label>
                                    <input id="email" type="email"
                                        class="form-control form-control-sm @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password" class="label">{{ __('Password') }}</label>
                                    <input id="password" type="password"
                                        class="form-control form-control-sm @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password-confirm" class="label">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control form-control-sm"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="form-control form-control-sm btn btn-primary rounded submit px-3">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </form>
                            <p class="text-center">Sudah daftar ? <a data-toggle="tab"
                                    href="{{ route('login') }}">Masuk</a></p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
