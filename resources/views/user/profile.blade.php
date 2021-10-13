@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="mt-4">
            <x-card title="Configurar Perfil" desc="Altere os dados do seu perfil." type="card">
                {{ Form::open(array('url' => route('user.update'), 'method' => 'PUT')) }}
                    <x-form.text title="Nome" value="{{ Auth::user()->name }}" class="col-md-6" field="name" required=1/>

                    <x-form.text title="Email" value="{{ Auth::user()->email }}" class="col-md-6" field="email" required=1/>

                    <x-form.checkbox title="Email" value="{{ Auth::user()->theme == 'light' ? 0 : 1 }}" desc="Habilitar dark-theme." class="col-md-12" field="theme" checked="{{ Auth::user()->theme == 'light' ? 0 : 1 }}" required=1/>

                    <button type="submit" class="btn btn-primary mt-4 offset-6">
                        Alterar &nbsp;
                        <i class="fa fa-check"></i>
                    </button>
                {{ Form::close() }}

                <hr>
                <div class="row justify-content-between">
                    <div class="col-12 col-md-6">
                        <h5>Deletar minha conta</h5>
                        <p class="small text-muted mb-md-0">
                            Atenção, excluir sua conta é uma ação permanente e não será recuperável depois de concluída.
                        </p>
                    </div>
                    <div class="col-auto">
                        {{ Form::open(array('url' => route('user.destroy'), 'method' => 'DELETE', 'enctype' => 'multipart/form-data')) }}
                        <button class="btn btn-danger mt-3">
                            Deletar &nbsp;
                            <i class="fa fa-trash"></i>
                        </button>
                        {{ Form::close() }}
                    </div>
                </div>
            </x-card>
        </div>
    </div>
@endsection
