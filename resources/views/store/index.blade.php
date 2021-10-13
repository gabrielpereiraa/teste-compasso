@extends('layouts.app')

@section('content')
<x-page-header title='Listar Lojas' desc='Lojas cadastradas no sistema.' link='{{ route("stores.create") }}' type='2'/>
    <div class="container-fluid" style="margin-top: -70px">
        <div class="col-md-12 px-0">
            <x-card title="" desc="" type="empty" bclass="pt-0">
                <x-table.search :value="$search"/>
                <x-table.table :table=$table :results=$results title="Lojas" title2="Lojas" module="stores"/>
            </x-card>
        </div>
    </div>
@endsection
