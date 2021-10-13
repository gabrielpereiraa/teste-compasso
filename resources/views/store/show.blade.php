@extends('layouts.app')

@section('content')
    <x-page-header title='Dados da Loja' desc='Visualize com detalhe as informações da loja: {{$store->name}}' type="2"/>
        <div class="container-fluid" style="margin-top: -70px">
            <div class="col-md-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Dados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="produtos-tab" data-toggle="tab" href="#produtos" role="tab" aria-controls="produtos" aria-selected="false">Produtos</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <x-card title="" desc="" type="card" bclass="pt-0">
                                {{ Form::open(array('url' => route('stores.update', $store->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data')) }}
                                    <div class="row">
                                        <x-form.text title="Nome da loja" value="{{ $store->name }}" class="col-md-6" type="text" field="name" required=1 max="50" style="2"/>
                                    </div>
                                    <div class="row">
                                        <x-form.text title="Endereço" value="{{ $store->address }}" class="col-md-4" field="address" required=1 max="100" style="2"/>
                                    </div>
                                    <div class="row">
                                        <x-form.text title="Bairro" value="{{ $store->district }}" class="col-md-4" field="district" required=1 max="50" style="2"/>
                                    </div>
                                    <div class="row">
                                        <x-form.text title="Cidade" value="{{ $store->city }}" class="col-md-4" field="city" required=1 max="30" style="2"/>
                                        <x-form.select title="Estado" value="{{ $store->state }}" class="col-md-4" type="state" field="state" required=1 style="2"/>
                                        <div class="col-md-4 text-right pt-2">
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
                                        <h5>Deletar loja</h5>
                                        <p class="small text-muted mb-md-0">
                                            Atenção, excluir essa loja é uma ação permanente e não será recuperável depois de concluída.
                                        </p>
                                    </div>
                                    <div class="col-auto">
                                        {{ Form::open(array('url' => route('stores.destroy', $store->id), 'method' => 'DELETE', 'enctype' => 'multipart/form-data')) }}
                                        <button class="btn btn-danger mt-3">
                                            Deletar &nbsp;
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        {{ Form::close() }}
                                    </div>
                                </div>
                            </x-card>
                    </div>
                    <div class="tab-pane fade" id="produtos" role="tabpanel" aria-labelledby="produtos-tab">
                        <x-card title="" desc="" type="card" bclass=" pt-0 pl-0 pr-0">
                            <x-page-header title='' desc='Produtos cadastrados na loja: {{ $store->name }}' link='{{ route("products.create") }}' type='2'/>
                            <div class="container-fluid" style="margin-top: -70px">
                                <div class="col-md-12 px-0">
                                    <x-card title="" desc="" type="empty" bclass="pt-0">
                                        <x-table.table :table=$tableProd :results="$store->products" title="Produtos" title2="Produtos" module="products" foot=0/>
                                    </x-card>
                                </div>
                            </div>
                        </x-card>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <x-card title="" desc="" type="card" bclass=" pt-0 pl-0 pr-0">
                            Mostrar as modalidades
                        </x-card>
                    </div>
                </div>

            </div>
        </div>
@endsection
