<div class="col-12 {{ $class }}">
    <div class="custom-control custom-checkbox my-1 mr-sm-2">
        <input type="checkbox" class="custom-control-input" id="{{ $field }}" name="{{ $field }}" value="{{ $value }}" {{ $checked ? "checked" : "" }}>
        <label class="custom-control-label" for="{{ $field }}">{{ $desc }}</label>
    </div>
</div>
