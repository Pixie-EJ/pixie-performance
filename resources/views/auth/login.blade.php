@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-sm-12 col-md-8 col-lg-6 d-flex flex-column align-items-center">
            <div class="card w-100">
                <div class="card-header bg-light">
                    <h3 class="color-green m-0 text-uppercase">Login</h3>
                </div>
                <div class="card-body rounded-bottom bg-light p-0">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group flex-column pt-2 px-2">
                            <label for="email" class="col-md-4 col-form-label color-grey text-md-left">Email</label>
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group flex-column pb-2 px-2">
                            <label for="password" class="col-md-4 col-form-label text-md-left color-grey">Senha</label>
                            <div class="col-md-12">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                </div>
            </div>
        </div> --}}
        <div class="d-flex align-items-center justify-content-center">
            <a class="w-100 bg-green p-2 rounded-bottom" type="submit">
                <h3 class="color-light m-0 text-center">Login</h3>
            </a>
            {{-- @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
            </a>
            @endif --}}
        </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
@endsection