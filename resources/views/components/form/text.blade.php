@if ($style == '1')
    <div class="row mb-4">
        <label for="{{$field}}" class="col-lg-2 col-form-label">{{$title}}:
            @if ($required)
                <span class="t-required">*</span>
            @endif
        </label>
        <div class="col-lg-8 fv-row fv-plugins-icon-container">
            @if($type == 'text')
                {!! Form::text($field, $value, ["placeholder" => $placeholder, "autocomplete" => $field, "maxlength" => $max, "class" => "form-control " . $class . ($errors->has($field) ? " is-invalid" : "")] + ($disabled == 1 ? ['disabled'] : []) + ($required == 1 ? ['required'] : []) + ($mask != "" ? ["data-mask" => $mask] : []) + ($mask2 != "" ? ["data-mask" => $mask2, "data-mask-reverse" => "true"] : [])); !!}
            @elseif($type == 'money')
                {!! Form::text($field, $value, ["placeholder" => $placeholder, "autocomplete" => $field, "maxlength" => $max, "class" => "money-mask form-control " . $class . ($errors->has($field) ? " is-invalid" : "")] + ($disabled == 1 ? ['disabled'] : []) + ($required == 1 ? ['required'] : []) + ($mask != "" ? ["data-mask" => $mask] : []) + ($mask2 != "" ? ["data-mask" => $mask2, "data-mask-reverse" => "true"] : [])); !!}
            @elseif($type == 'email')
                {!! Form::email($field, $value, ["placeholder" => $placeholder, "autocomplete" => $field, "maxlength" => $max, "class" => "form-control " . $class . ($errors->has($field) ? " is-invalid" : "")] + ($disabled == 1 ? ['disabled'] : []) + ($required == 1 ? ['required'] : []) + ($mask != "" ? ["data-mask" => $mask] : []) + ($mask2 != "" ? ["data-mask" => $mask2, "data-mask-reverse" => "true"] : [])); !!}
            @elseif($type == 'date')
                {!! Form::date($field, $value, ["placeholder" => $placeholder, "class" => "form-control " . $class . ($errors->has($field) ? " is-invalid" : "")] + ($disabled == 1 ? ['disabled'] : []) + ($required == 1 ? ['required'] : [])); !!}
            @else
                <div class="custom-file">
                    {!! Form::file($field, ["id" => $field, "class" => "form-control custom-file-input " . $class . ($errors->has($field) ? " is-invalid" : "")] + ($disabled == 1 ? ['disabled'] : []) + ($required == 1 ? ['required'] : [])); !!}
                    <label class="custom-file-label" for="{{$field}}">Selecionar arquivo</label>
                </div>
            @endif
        </div>
        @error($field)
            <label for="{{$field}}" class="offset-2 col-lg-10 invalid-feedback">
                    {{ $message }}
            </label>
        @enderror
    </div>
@elseif ($style == '2')
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

            @if($type == 'text')
                {!! Form::text($field, $value, ["placeholder" => $placeholder, "autocomplete" => $field, "maxlength" => $max, "class" => "form-control "  . ($errors->has($field) ? " is-invalid" : "")] + ($disabled == 1 ? ['disabled'] : []) + ($required == 1 ? ['required'] : []) + ($mask != "" ? ["data-mask" => $mask] : []) + ($mask2 != "" ? ["data-mask" => $mask2, "data-mask-reverse" => "true"] : [])); !!}
            @elseif($type == 'money')
                {!! Form::text($field, $value, ["placeholder" => $placeholder, "autocomplete" => $field, "maxlength" => $max, "class" => "money-mask form-control "  . ($errors->has($field) ? " is-invalid" : "")] + ($disabled == 1 ? ['disabled'] : []) + ($required == 1 ? ['required'] : []) + ($mask != "" ? ["data-mask" => $mask] : []) + ($mask2 != "" ? ["data-mask" => $mask2, "data-mask-reverse" => "true"] : [])); !!}
            @elseif($type == 'email')
                {!! Form::email($field, $value, ["placeholder" => $placeholder, "autocomplete" => $field, "maxlength" => $max, "class" => "form-control "  . ($errors->has($field) ? " is-invalid" : "")] + ($disabled == 1 ? ['disabled'] : []) + ($required == 1 ? ['required'] : []) + ($mask != "" ? ["data-mask" => $mask] : []) + ($mask2 != "" ? ["data-mask" => $mask2, "data-mask-reverse" => "true"] : [])); !!}
            @elseif($type == 'password')
                {!! Form::password($field, ["placeholder" => $placeholder, "autocomplete" => $field, "maxlength" => $max, "class" => "form-control "  . ($errors->has($field) ? " is-invalid" : "")] + ($disabled == 1 ? ['disabled'] : []) + ($required == 1 ? ['required'] : []) + ($mask != "" ? ["data-mask" => $mask] : []) + ($mask2 != "" ? ["data-mask" => $mask2, "data-mask-reverse" => "true"] : [])); !!}
            @elseif($type == 'date')
                {!! Form::date($field, $value, ["placeholder" => $placeholder, "class" => "form-control " . ($errors->has($field) ? " is-invalid" : "")] + ($disabled == 1 ? ['disabled'] : []) + ($required == 1 ? ['required'] : [])); !!}
            @else
                <div class="custom-file">
                    {!! Form::file($field, ["id" => $field, "class" => "form-control custom-file-input " . ($errors->has($field) ? " is-invalid" : "")] + ($disabled == 1 ? ['disabled'] : []) + ($required == 1 ? ['required'] : [])); !!}
                    <label class="custom-file-label" for="{{$field}}">Selecionar arquivo</label>
                </div>
            @endif

            @error($field)
                <label for="{{$field}}" class="invalid-feedback">
                        {{ $message }}
                </label>
            @enderror

        </div>
    </div>
@endif

