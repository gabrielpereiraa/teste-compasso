@if ($results->first())
    <thead>
        <tr>
            @foreach ($table as $head)
                <th scope="col" width="{{$head['width']}}">{{$head['name']}}</th>
            @endforeach

            @if ($type == 1)
                <th scope="col" width="2%"></th>
            @endif
        </tr>
    </thead>
@endif
