@extends('layouts.app')

@section('content')
    <div class="wrapper d-flex justify-content-center align-items-center p-3">

        <div class="loginBox">
            <div class="text-center pt-3">
                <h3>Zarejestruj się</h3>
            </div>
            <form class="form" method="POST" action="{{ route('register') }}">
                @csrf

                    <label for="name" class="col-md-12 col-form-label text-md-left">{{ __('Name') }}</label>

                    <div class="col-md-12">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                               name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <label for="email"
                           class="col-md-12 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <label for="password" class="col-md-12 col-form-label text-md-left">{{ __('Password') }}</label>

                    <div class="col-md-12">
                        <input id="password" type="password"
                               class="form-control @error('password') is-invalid @enderror" name="password" required
                               autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <label for="password-confirm"
                           class="col-md-12 col-form-label text-md-left">{{ __('Confirm Password') }}</label>

                    <div class="col-md-12">
                        <input id="password-confirm" type="password" class="form-control"
                               name="password_confirmation" required autocomplete="new-password">
                    </div>

                <div class="form-group row mb-0">
                    <div class="d-flex justify-content-between align-items-center mt-5">
                        <button type="submit" class="submit">Dalej</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
