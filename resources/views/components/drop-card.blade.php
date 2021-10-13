<div {{ $attributes->merge(['class' => 'jumbotron2 welcome shadow card-drop mb-4']) }}>
    <div class="row card-drop-header">
        <div class="col-md-11">
            <h1 class="display-4" style="font-size: 1.75rem;">{{ $title }}</h1>
            <p>{{ $desc }}</p>
        </div>
        <div class="col-md-1 text-center card-drop-icon">
            <i class="fa fa-chevron-down w-50 h-50 mt-3 "></i>
        </div>
    </div>
    <div class="row card-drop-body" style="display: none">
        <div class="col-md-12">
            {{ $slot }}
        </div>
    </div>
</div>
