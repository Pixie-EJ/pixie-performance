@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-sm-12 col-md-8 col-lg-6 d-flex flex-column align-items-center">
            <div class="card w-100">
            <div class="card-header bg-light">
                    <h3 class="color-green m-0 text-uppercase">Registre-se</h3>
                </div>
                <div class="card-body rounded-bottom bg-light p-0">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group flex-column pt-2 px-2">
                            <label for="name" class="col-md-12 col-form-label text-md-left color-grey">Nome</label>

                            <div class="col-md-12">
                                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group flex-column px-2">
                            <label for="email" class="col-md-12 col-form-label text-md-left color-grey">Email</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group flex-column px-2">
                            <label for="password" class="col-md-12 col-form-label text-md-left color-grey">Senha</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <b>{{ $message }}</b>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group flex-column px-2 pb-2">
                            <label for="exampleRepeatPassword"
                                class="col-md-12 col-form-label text-md-left color-grey">{{ __('Confirme a senha') }}</label>
                                <div class="col-md-12">
                            <input type="password" name="password_confirmation"
                                class="form-control form-control-user" id="exampleRepeatPassword" required
                                autocomplete="new-password">
                                </div>
                        </div>  

                        <div class="d-flex align-items-center justify-content-center">
                            <a class="w-100 bg-green p-2 rounded-bottom" type="submit">
                                <h3 class="color-light m-0 text-center">Cadastrar</h3>
                            </a>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
