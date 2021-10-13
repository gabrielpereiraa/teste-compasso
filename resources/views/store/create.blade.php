@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="mt-4">
            <x-card title="Nova Loja" desc="Adicione os dados da nova loja." type="card">
                {{ Form::open(array('url' => route('stores.store'), 'method' => 'POST')) }}
                    <x-form.text title="Nome" value="" field="name" max="200" class="col-md-5" required=1/>

                    <x-form.text title="Endereço" value="" field="address" max="200" class="col-md-4" required=1/>

                    <x-form.text title="Bairro" value="" field="district" max="100" class="col-md-3" required=1/>

                    <x-form.text title="Cidade" value="" field="city" max="150" class="col-md-3" required=1/>

                    <x-form.select title="Estado" value="" field="state" type="state" class="col-md-3" required=1/>

                    <button type="submit" class="btn btn-primary mt-4 offset-5">
                        SALVAR &nbsp;
                        <i class="fa fa-check"></i>
                    </button>
                {{ Form::close() }}
            </x-card>
        </div>
    </div>
@endsection
