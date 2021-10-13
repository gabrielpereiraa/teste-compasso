
<header class="page-header-{{ Auth::user()->theme }} {{ $type==2 ? 'page-header-' . Auth::user()->theme . '-2' : '' }} pb-6 px-5">
    <div class="pt-4 pb-4">
        <div class="row align-items-center justify-content-between">
            <div class="col-auto mt-4">
                <h1 class="page-header-title">
                    @if($icon)
                        <i class="page-header-icon fa {{ $icon }}"></i>
                        &nbsp;
                    @endif
                    {{ $title }}
                </h1>
                <div class="page-header-subtitle">{{ $desc }}</div>
            </div>

            @if ($type || $link)
                <div class="col-12 col-xl-auto mt-4">
                    @if ($type == 'time')
                        <i class="far fa-calendar-alt"></i>
                        <span>
                            @php
                                setlocale( LC_ALL, 'pt_BR.utf-8', 'pt_BR', 'Portuguese_Brazil');
                                date_default_timezone_set('America/Sao_Paulo');
                                echo utf8_encode(strftime('%A, %d de %B de %Y', strtotime('today')) . '.');
                            @endphp
                        </span>
                    @elseif($link)
                        <a class="btn btn-primary" href="{{ $link }}">
                            <i class="fa fa-plus"></i> Novo
                        </a>
                    @endif
                </div>
            @endif
        </div>
    </div>
</header>
