@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="mt-4">
            <x-card title="Novo produto" desc="Adicione os dados do novo produto." type="card">
                {{ Form::open(array('url' => route('products.store'), 'method' => 'POST')) }}
                    <x-form.text title="Nome do produto" value="" field="name" max="100" class="col-md-5" required=1 max="80"/>

                    <x-form.text title="Preço do produto" value="" field="price" class="col-md-3" required=1 type="money" max="10"/>

                    <x-form.select title="Loja pertencente" value="" field="store_id" class="col-md-5" :array=$stores required=1/>

                    <button type="submit" class="btn btn-primary mt-4 offset-5">
                        SALVAR &nbsp;
                        <i class="fa fa-check"></i>
                    </button>
                {{ Form::close() }}
            </x-card>
        </div>
    </div>
@endsection
