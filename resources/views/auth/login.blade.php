@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-150">
                    <div class="card-body">
                        <div class="logo-container">
                            <img src="{{asset('img/logo2.png')}}" alt="Logo">
                        </div>

                        <h1 class="text-center login-header">Zaloguj się</h1>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="container">
                                <div class="col-md-8 offset-md-2">
                                    <div class="form-group">
                                        <label for="email"
                                               class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <input id="email" type="email"
                                               class="form-control form-control-lg @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="password"
                                               class="col-form-label text-md-right">{{ __('Password') }}</label>

                                        <input id="password" type="password"
                                               class="form-control form-control-lg @error('password') is-invalid @enderror" name="password"
                                               required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            {{--<div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>--}}

                            <div class="form-group row mb-0">
                                <div class="btn-container">
                                    <button type="submit" class="btn btn-primary mb-2">
                                        {{ __('Login') }}
                                    </button>
                                    <a href="{{ route('register') }}" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </a>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
