@if ($type == 'card')
    <div {{ $attributes->merge(['class' => 'jumbotron2 div-card shadow mb-4']) }}>
        @if($title)
            <div class="row card-header">
                <div class="col-md-12 d-flex">
                    @if ($icon)
                        <i class="{{ $icon }} fa-2x text-gray-300"></i>
                        &nbsp;&nbsp;&nbsp;
                    @endif
                    <h1 class="card-header-title">{{ $title }}</h1>
                </div>
                <div class="col-md-12">
                    <p>{{ $desc }}</p>
                </div>
            </div>
        @endif
        <div class="row card-body {{ $bclass }}">
            <div class="col-md-12">
                {{ $slot }}
            </div>
        </div>
    </div>
@elseif ($type == 'empty')
    <div {{ $attributes->merge(['class' => 'mb-4']) }}>
        <div class="row card-body {{ $bclass }}">
            <div class="col-md-12">
                {{ $slot }}
            </div>
        </div>
    </div>
@elseif ($type == 'drop')
    <div {{ $attributes->merge(['class' => 'jumbotron2 div-card shadow card-drop mb-4']) }}>
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
@elseif ($type == 'small')
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card card-{{ Auth::user()->theme}} border-left-{{ Auth::user()->theme }} shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">
                            {{ $title }}</div>
                        <div class="h5 mb-0 font-weight-bold">{{ $desc }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="{{ $icon }} fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small stretched-link" href="{{ $link }}">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Ver relatório</font>
                    </font>
                </a>
                <div class="small"><i class="fa fa-chevron-right"></i></div>
            </div>
        </div>
    </div>
@else
    <div class="col-md-12">
        <div class="jumbotron welcome shadow">
            <h1 style="font-size: 2.3rem;">{{ $title }}</h1>
            <p>{{ $desc }}</p>
        </div>
    </div>
@endif

