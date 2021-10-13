<!doctype html>
@php
    $theme='light'
@endphp

@isset(Auth::user()->theme)
    @php
        $theme = Auth::user()->theme;
    @endphp
@endisset

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{$theme}}-theme">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/custom.js') }}" defer></script>
        <script src="{{ asset('js/jquery.mask.js') }}" defer></script>
        <script src="{{ mix('js/fontawesome.js') }}" defer></script>
        <script src="{{ mix('js/solid.js') }}" defer></script>
        <script src="{{ mix('js/brands.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">
    </head>
    <body>
        @auth
            <div id="app" class="main-app">
                <div class="container-fluid h-100 main-div">
                    <div class="row h-100">
                        @include('include.header.web')

                        <div id="content-wrapper" class="col fluid d-flex flex-column p-0">
                            @include('include.sidebar.web')

                            <div class="main-container">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
                @include('include.alerts.alert')
            </div>
        @else
            <div id="app" class="h-100">
                @include('include.header.guest')

                <main class="py-0 {{ in_array(Route::currentRouteName(), ['register']) ? '' : 'h-80 d-flex align-items-center' }} ">
                    @yield('content')
                </main>
            </div>
            @include('include.alerts.alert')
        @endauth
    </body>
</html>
