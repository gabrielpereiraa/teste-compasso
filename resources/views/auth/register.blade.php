@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row align-items-top pb-0 pt-4 mt-5 align-content-md-stretch">
        <div class="col-12 col-md-5 order-md-1 py-5">
            <div class="text-center my-5">
            <img src="svg/vision.svg" alt="..." class="w-90 img-fluid">
            </div>
        </div>

        <div class="col-12 col-md-5 order-md-2 offset-1">
            <h1 class="text-center mb-3">
                Registrar-se
            </h1>

            <p class="text-muted text-center mb-5">
                Já tem uma conta? <a href="{{ route('login') }}">Faça seu login</a>.
            </p>

            {{ Form::open(array('url' => route('register'), 'method' => 'POST')) }}
            <div class="row m-0">
                <x-form.text title="Nome Completo" type="text" field="name" required=1 max="100" style="2" class="p-0"/>

                <x-form.text title="E-mail" type="email" field="email" required=1 max="50" style="2" class="p-0"/>

                <x-form.text title="Senha" type="password" field="password" required=1 max="20" style="2" class="p-0"/>

                <x-form.text title="Confirmar Senha" type="password" field="password_confirmation" required=1 max="20" style="2" class="p-0"/>
            </div>

            <button class="btn btn-lg w-100 btn-primary mb-3" type="submit">
                Registrar-se
            </button>

            <div class="text-center">
                <small class="text-muted text-center">
                    Já tem uma conta? <a href="{{ route('login') }}">Faça seu login</a>.
                </small>
            </div>
            {{ Form::close()}}
        </div>
    </div>
</div>
@endsection
