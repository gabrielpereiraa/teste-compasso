@if ($errors->any())
    <div class="message-alert alert alert-danger alert-dismissible fade show">
        <strong>Atenção!</strong> Ocorreu um problema no processamento, por favor, verifique todos os dados.
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
@endif

@if(session()->has('alert-success'))

@endif

@if(Session::has('alert-success'))
    <div class="message-alert alert alert-success alert-dismissible fade show">
        <strong>Sucesso!</strong> {{ Session::get('alert-success') }}
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
@endif
