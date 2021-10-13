<table class="table table-md table-hover table-nowrap card-table">
    <x-table.head :table=$table :results=$results :type=$type :module=$module/>
    <x-table.body :table=$table :results=$results :type=$type :module=$module/>
</table>
@if($foot)
    <x-table.foot :results=$results/>
@endif

@if(Session::has('search-error'))
    <x-error.search error="{{Session::get('search-error')}}" title="{{$title}}" title2="{{$title2}}"/>
@endif



