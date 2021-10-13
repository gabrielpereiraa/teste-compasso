{{ Form::open(['id' => $id, 'url' => route($module . '.destroy', $id), 'method' => 'delete']) }}
<button
    type="button"
    data-html="true"
    class="btn btn-icon btn-danger"
    data-toggle="popover"
    title="Tem certeza?"
    data-placement="left"
    data-content=
        "<div>
            <a class='a btn btn-icon btn-sm btn-secondary btn-popup-success' id='popover-{{$id}}'>Sim</button>
            <a class='btn btn-icon btn-sm btn-danger btn-popup-danger'>Não</a>
        </div>">
    <i class="fa fa-times"></i>
</button>
{{ Form::close() }}


