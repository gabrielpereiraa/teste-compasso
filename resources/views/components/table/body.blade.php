<tbody>
    @foreach ($results as $result)
        <tr>
            @foreach ($table as $body)
                <td>{{ $result->{$body['field']} }}</td>
            @endforeach

            @if ($type == "1")
                <td>
                    <a class="btn btn-icon btn-primary" href="{{ route($module. ".show", $result->id) }}">
                        <i class="fa fa-eye"></i>
                    </a>
                </td>
            @endif
        </tr>
    @endforeach
</tbody>
