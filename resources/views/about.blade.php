@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row align-items-center py-lg-4 py-md-4">
        <div class="col-12 col-md-5 order-md-2 mb-5 mb-md-0 my-5 py-2 ml-4">
            <div class="text-center">
            <img src="/svg/vectorpaint.svg" alt="..." class="w-90 img-fluid">
            </div>
        </div>

        <div class="col-12 col-md-5 order-md-1 offset-md-2 col-xl-4 my-5">
            <h1 class="text-center mb-3">
                Desafio Técnico
                Compasso UOL
            </h1>

            <p class="text-muted text-center mb-5">
                Esse sistema foi desenvolvido apenas para avalição de aptidão.
            </p>

            <a class="btn btn-lg w-100 btn-primary mb-3" href=" {{ route('login') }} ">
                Fazer login
            </a>

            <div class="text-center">
                <small class="text-muted text-center">
                    Não tem uma conta? <a href="{{ route('register') }}">Registrar-se</a>.
                </small>
            </div>

            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection

