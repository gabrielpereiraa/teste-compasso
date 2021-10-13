@extends('layouts.app')

@section('content')
    <x-page-header title='Dados do Produto' desc='Visualize com detalhe as informações do produto: {{$product->name}}' type="2"/>
        <div class="container-fluid" style="margin-top: -70px">
            <div class="col-md-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Dados</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <x-card title="" desc="" type="card" bclass="pt-0">
                                <div class="row">
                                    <x-form.text title="Código do produto" value="{{ $product->id }}" class="col-md-4" type="text" field="codprod" required=1 max="50" disabled=1 style="2"/>
                                </div>
                                {{ Form::open(array('url' => route('products.update', $product->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data')) }}
                                    <div class="row">
                                        <x-form.text title="Nome do produto" value="{{ $product->name }}" class="col-md-6" type="text" field="name" required=1 max="50" style="2"/>
                                    </div>
                                    <div class="row">
                                        <x-form.text title="Preço do produto" value="{{ $product->price }}" class="col-md-4" field="price" required=1 max="100" style="2" type="money"/>
                                    </div>
                                    <div class="row">
                                        <x-form.select title="Loja pertencente" value="{{ $product->store_id }}" class="col-md-4" :array="$stores" field="store_id" required=1 style="2"/>
                                        <div class="col-md-4 offset-4 text-right pt-2">
                                            <button class="btn btn-primary mt-3">
                                                Alterar &nbsp;
                                                <i class="fa fa-pencil-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                {{ Form::close() }}
                                <hr>
                                <div class="row justify-content-between">
                                    <div class="col-12 col-md-6">
                                        <h5>Deletar produto</h5>
                                        <p class="small text-muted mb-md-0">
                                            Atenção, excluir esse produto é uma ação permanente e não será recuperável depois de concluída.
                                        </p>
                                    </div>
                                    <div class="col-auto">
                                        {{ Form::open(array('url' => route('products.destroy', $product->id), 'method' => 'DELETE', 'enctype' => 'multipart/form-data')) }}
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

            </div>
        </div>
@endsection
