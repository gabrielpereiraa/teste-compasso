@if(Session::has('search-error'))
    <x-error.search type="{{Session::get('search-error')}}"/>
@endif
