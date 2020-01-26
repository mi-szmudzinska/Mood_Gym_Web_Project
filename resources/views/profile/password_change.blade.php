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

                <h1 class="text-center login-header">Zmiana hasła</h1>
                <form method="POST" action="">
                    @csrf
                    <div class="container">
                        <div class="col-md-8 offset-md-2">
                            <div class="form-group">
                                <label for="password"
                                       class="col-form-label text-md-right">{{ __('Stare hasło:') }}</label>

                                <input id="password" type="password"
                                       class="form-control form-control-lg @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password"
                                       class="col-form-label text-md-right">{{ __('Nowe haslo:') }}</label>

                                <input id="password" type="password"
                                       class="form-control form-control-lg @error('new_password') is-invalid @enderror" name="new_password"
                                       required autocomplete="new_password">

                                @error('new_password')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password"
                                       class="col-form-label text-md-right">{{ __('Powtórz nowe hasło:') }}</label>

                                <input id="password" type="password"
                                       class="form-control form-control-lg @error('confirm_password') is-invalid @enderror" name="confirm_password"
                                       required autocomplete="confirm_password">

                                @error('confirm_password')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="form-group row mb-0">
                                <div class="btn-container">
                                    <button type="submit" class="btn btn-primary mb-2">
                                        Zmień hasło
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
