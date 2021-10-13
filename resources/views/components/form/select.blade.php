@if ($style == "1")
    <div class="row mb-4">
        <label for="{{$field}}" class="col-lg-2 col-form-label">{{$title}}:
            @if ($required)
                <span class="t-required">*</span>
            @endif
        </label>
        <div class="col-lg-8 fv-row fv-plugins-icon-container">
            @if ($errors->has($field))
                @php
                    $value = old($field);
                @endphp
            @endif

            @if ($type == "")
                {!! Form::select($field,
                    ['' => '-- Selecionar --'] + $array,
                    $value, array("class" => "form-control " . $class . ($errors->has($field) ? "is-invalid" : "")))
                !!}
            @elseif($type == "genre")
                {!! Form::select($field,
                    ['' => '-- Selecionar --'] + [
                        "F" => "Feminino",
                        "M" => "Masculino"
                    ],
                    $value, array("class" => "form-control " . $class . ($errors->has($field) ? "is-invalid" : "")))
                !!}
            @elseif($type == "state")
                {!! Form::select($field,
                    ['' => '-- Selecionar --'] + [
                        "AC" => "Acre",
                        "AL" => "Alagoas",
                        "AP" => "Amapá",
                        "AM" => "Amazonas",
                        "BA" => "Bahia",
                        "CE" => "Ceará",
                        "DF" => "Distrito Federal",
                        "ES" => "Espírito Santo",
                        "GO" => "Goiás",
                        "MA" => "Maranhão",
                        "MT" => "Mato Grosso",
                        "MS" => "Mato Grosso do Sul",
                        "MG" => "Minas Gerais",
                        "PA" => "Pará",
                        "PB" => "Paraíba",
                        "PR" => "Paraná",
                        "PE" => "Pernambuco",
                        "PI" => "Piauí",
                        "RJ" => "Rio de Janeiro",
                        "RN" => "Rio Grande do Norte",
                        "RS" => "Rio Grande do Sul",
                        "RO" => "Rondônia",
                        "RR" => "Roraima",
                        "SC"  => "Santa Catarina",
                        "SP" => "São Paulo",
                        "SE" => "Sergipe",
                        "TO" => "Tocantins",
                    ], $value, ["class" => "form-control ". $class . ($errors->has($field) ? " is-invalid" : "")] + ($required == 1 ? ['required'] : []))
                !!}
            @endif
        </div>
        @error($field)
            <label for="{{$field}}" class="offset-2 col-lg-10 invalid-feedback">
                {{ $message }}
            </label>
        @enderror
    </div>
@elseif ($style == "2")
    <div class="col-12 {{$class}}">
        <div class="form-group">
            <label class="mb-1 form-label">
                {{ $title }}
                @if ($required)
                    <span class="t-required">*</span>
                @endif
            </label>

            @if ($subtitle)
                <small class="mt-0 form-text text-muted">
                    {{ $subtitle }}
                </small>
            @endif

            @if ($errors->has($field))
                @php
                    $value = old($field);
                @endphp
            @endif

            @if ($type == "")
                {!! Form::select($field,
                    ['' => '-- Selecionar --'] + $array,
                    $value, array("class" => "form-control "  . ($errors->has($field) ? "is-invalid" : "")))
                !!}
            @elseif($type == "genre")
                {!! Form::select($field,
                    ['' => '-- Selecionar --'] + [
                        "F" => "Feminino",
                        "M" => "Masculino"
                    ],
                    $value, array("class" => "form-control "  . ($errors->has($field) ? "is-invalid" : "")))
                !!}
            @elseif($type == "state")
                {!! Form::select($field,
                    ['' => '-- Selecionar --'] + [
                        "AC" => "Acre",
                        "AL" => "Alagoas",
                        "AP" => "Amapá",
                        "AM" => "Amazonas",
                        "BA" => "Bahia",
                        "CE" => "Ceará",
                        "DF" => "Distrito Federal",
                        "ES" => "Espírito Santo",
                        "GO" => "Goiás",
                        "MA" => "Maranhão",
                        "MT" => "Mato Grosso",
                        "MS" => "Mato Grosso do Sul",
                        "MG" => "Minas Gerais",
                        "PA" => "Pará",
                        "PB" => "Paraíba",
                        "PR" => "Paraná",
                        "PE" => "Pernambuco",
                        "PI" => "Piauí",
                        "RJ" => "Rio de Janeiro",
                        "RN" => "Rio Grande do Norte",
                        "RS" => "Rio Grande do Sul",
                        "RO" => "Rondônia",
                        "RR" => "Roraima",
                        "SC"  => "Santa Catarina",
                        "SP" => "São Paulo",
                        "SE" => "Sergipe",
                        "TO" => "Tocantins",
                    ], $value, ["class" => "form-control " . ($errors->has($field) ? " is-invalid" : "")] + ($required == 1 ? ['required'] : []))
                !!}
            @endif

            @error($field)
                <label for="{{$field}}" class="invalid-feedback">
                        {{ $message }}
                </label>
            @enderror

        </div>
    </div>
@endif
