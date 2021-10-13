@extends('layouts.app')

@section('content')

<x-page-header title='Home' desc='Página inicial do sistema.' icon='fa-home' type='time'/>

<div class="container-fluid" style="margin-top: -70px">
    <div class="col-md-12">
        <div class="row">
            <x-card title='Lojas' :desc='$stores' type='small' icon='fa fa-store' link='/stores'/>

            <x-card title='Produtos' :desc='$products' type='small' icon='fa fa-box' link='/products'/>
        </div>
    </div>
</div>
@endsection
