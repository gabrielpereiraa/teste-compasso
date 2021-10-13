@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row align-items-center py-lg-4 py-md-4">
        <div class="col-12 col-md-5 order-md-2 mb-5 mb-md-0 my-1 py-1 ml-4">
            <div class="text-center">
            <img src="/svg/problem.svg" alt="..." class="w-90 img-fluid">
            </div>
        </div>

        <div class="col-12 col-md-5 order-md-1 offset-md-2 col-xl-4 my-5">
            <h1 class="text-center mb-3">
                Esqueci a senha
            </h1>

            <p class="text-muted text-center mb-3">
                Digite seu e-mail para obter um link de redefinição de senha.
            </p>

            {{ Form::open(array('url' => route('password.update'), 'method' => 'POST')) }}
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

                <button class="btn btn-lg w-100 btn-primary mb-3" type="submit">
                    Enviar
                </button>

                <div class="text-center">
                    <small class="text-muted text-center">
                        Lembrou da sua senha? <a href="{{ route('login') }}">Faça seu login</a>.
                    </small>
                </div>


            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection
