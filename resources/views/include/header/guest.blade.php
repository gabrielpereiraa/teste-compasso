<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <div class="logo pt-0">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" onclick="location.href='/about'" style='cursor:pointer'>
                <div class="sidebar-brand-icon">
                    <i class="fa fa-laptop"></i>
                </div>
                <div class="sidebar-brand-text mx-2">
                    Desafio UOL
                </div>
            </a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>

            <ul class="navbar-nav ml-auto">
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar-se') }}</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
