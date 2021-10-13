@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row align-items-center pt-0 pb-0">
        <div class="col-12 col-md-5 offset-md-1 mb-5 mb-md-0 my-5 py-2">
            <div class="text-center">
            <img src="svg/marketing.svg" alt="..." class="w-80 img-fluid">
            </div>
        </div>

        <div class="col-12 col-md-5 col-xl-4 m-0" style="margin-top:-10px">
            <h1 class="text-center mb-3">
                Fazer login
            </h1>

            <p class="text-muted text-center mb-3">
                Bem-vindo de volta, faça login em sua conta.
            </p>

            {{ Form::open(array('url' => route('login'), 'method' => 'POST')) }}
                <div class="form-group">
                    <label class="form-label">
                        E-mail
                    </label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Digite seu e-mail">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label class="form-label">
                                Senha
                            </label>
                        </div>
                    </div>

                    <input class="form-control  @error('password') is-invalid @enderror" type="password" name="password" placeholder="Digite sua senha">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button class="btn btn-lg w-100 btn-primary mb-3" type="submit">
                    Entrar
                </button>

                <div class="text-center">
                    <small class="text-muted text-center">
                        Não tem uma conta? <a href="{{ route('register') }}">Registrar-se</a>.
                    </small>
                </div>
            {{ Form::close()}}
        </div>
    </div>
</div>
@endsection
