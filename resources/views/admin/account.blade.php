@extends('layouts.app')
@section('content')
<section>
<div class="card card-body shadow-sm">

@if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif

<form method="POST" action="{{ route('account.update') }}">
  @csrf
  <div class="mb-3 row">
  <div class="col">
    <label for="name" class="form-label">Nama Lengkap</label>
    <input type="text" name="name" class="form-control" id="name" value="{{ Auth::user()->name }}" required>
  </div>
  <div class="col">
    <label for="email" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="email" value="{{ Auth::user()->email }}" required>
  </div>
  </div>

  <div class="row mb-3">
  <div class="col">
                            <label for="password" class="form-label">{{ __('Password Baru') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col">
                            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>

                            <div class="">
                                <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>
  </div>
  
  <button type="submit" class="btn btn-cbm">Simpan Perubahan</button>
</form>
</div>
</section>
@endsection