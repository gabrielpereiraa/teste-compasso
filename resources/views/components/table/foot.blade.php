@if($results->first())
    <div class="card-footer table-footer py-0 px-0">
        {{ $results->links('pagination.default') }}
    </div>
@endif
