@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card border-0 shadow">
                <!-- <div class="card-header border-0 text-center">
                    <img src="{{ asset('img/logo.png') }}" alt="" width="50%">
                </div> -->

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="">
                                <button type="submit" class="btn btn-cbm w-100">
                                    {{ __('Login Now') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer border-0 p-3 text-center">
                <p class="mb-0">Jika anda mempunyai kendala seputar password <br> silahkan <a href="{{ url('password/reset') }}">klik lupa password.</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('css')
<style>
    html, body {
        height:100%;
    }
    body {
        display: flex;
        align-items: center;
    }
</style>
@endsection