<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="yandex-verification"
          content="{{ env('YANDEX_VERIFICATION', '') }}"/>{{-- https://connect.yandex.ru/pdd/ --}}
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')"/>

    {{-- Scripts part 1 --}}
    <script src="{{ asset('js/jquery/1.11.2/jquery.min.js') }}"></script>

    {{-- Fonts --}}
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    <link href="{{ asset('fonts/proxima-nova/style.css') }}" rel="stylesheet" type="text/css">

    {{-- Styles --}}
    <link href="{{ asset('css/app_58.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link href="{{ asset('css/yo.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    {{-- Favicon --}}
    <link rel="icon" type="image/png" sizes="128x128" href="/favicon.png">
</head>
<body>
<div id="app">

    <div class="fw-background">{{-- from https://datatables.net/examples/basic_init/table_sorting.html --}}
    </div>

    <nav class="navbar navbar-expand-md navbar-dark">
        {{-- <nav class="navbar navbar-expand-md navbar-dark d-md-none">d-md-none - Скрыто на экранах шире md --}}
        <div class="container">

            {{-- logo --}}
            <div class="logo_mob d-md-none">{{-- d-md-none - Скрыто на экранах шире md --}}
                <div style="transform: translate(0px, -10px) scale(0.2); width: 1px; height: 1px;">
                    @include('partials.logo')
                </div>
            </div>
            {{--<div class="logo_mob d-md-none">--}}{{-- d-md-none - Скрыто на экранах шире md --}}{{--
                <span class="logo_name">{{ config('app.name', 'Laravel') }}</span>
            </div>--}}
            {{-- logo --}}

            <div class="relative">
                <a class="logo d-none d-md-block"
                   href="{{ url('/') }}">{{-- d-none d-md-block - Скрыто на экранах меньше md --}}

                    <div style="transform: translate(0px, -25px) scale(0.2); width: 1px; height: 1px;">
                        @include('partials.logo')
                    </div>

                </a>
            </div>

            {{-- main_menu --}}{{-- d-none d-md-block - Скрыто на экранах меньше md --}}
            <ul class="main_menu d-none d-md-block">
                @include('menus.main')
            </ul>
            {{-- main_menu --}}

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto"></ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">

                    {{-- Authentication Links --}}
                    @guest

                        @if (Route::has('register') and config('settings.display_login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register') and config('settings.display_registration'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif

                    @else

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown"
                               class="nav-link dropdown-toggle"
                               href="#"
                               role="button"
                               data-toggle="dropdown"
                               aria-haspopup="true"
                               aria-expanded="false"
                               v-pre
                            >
                                {{ auth()->user()->name }}<span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('profile.show') }}">{{ __('Profile') }}</a>
                                <a class="dropdown-item"
                                   href="{{ route('api-tokens.index') }}">{{ __('API Tokens') }}</a>
                                <a class="dropdown-item" href="{{ route('logout') }}">{{ __('Logout') }}</a>
                            </div>
                        </li>
                    @endguest
                    {{-- Authentication Links --}}

                </ul>

            </div>

        </div>
    </nav>


    <main class="py-4">

        @if( !empty($success))
            @alert(['type' => 'primary', 'title' => 'success'])
            {{ $success }}
            @endalert
        @endif

        @if( session('message'))
            <div class="fixed_alert alert alert-success alert-dismissible fade show" role="alert">
                {!! session('message') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if ($errors->any())
            <div class="container">
                <div class="fixed_alert alert alert-danger alert-dismissible fade show" role="alert">
                    <ol>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ol>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        @endif

        <div class="container">
            @yield('content')
        </div>

    </main>


    <div class="container">

        {{--@include('layouts.partials.separator')--}}

        <div class="grey denial_responsibility">
            Администрация Сайта не несет ответственности за размещённые Пользователями материалы (в т.ч. информацию и
            изображения), их содержание и качество.
        </div>

    </div>


    <div class="footer relative">
        <div class="container">
            <div class="copy">© Never trust yourself</div>
            <div class="row m-0">

                <ul class="main_menu">
                    @include('menus.main')
                </ul>

            </div>
        </div>

        <div class="skew"></div>
        <div class="skew-bg"></div>

    </div>
</div>

{{-- toTop --}}
<div id='toTop'><i class="fas fa-chevron-up"></i></div>
{{-- /toTop --}}



{{-- Scripts part 2 --}}
{{-- move to part 1 <script src="{{ asset('js/jquery/1.11.2/jquery.min.js') }}"></script> --}}
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>

{{-- toTop --}}
<script type="text/javascript">
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() != 0) {
                $('#toTop').fadeIn();
            } else {
                $('#toTop').fadeOut();
            }
        });
        $('#toTop').click(function () {
            $('body,html').animate({scrollTop: 0}, 800);
        });
    });
</script>
{{-- toTop --}}

{{-- ripple --}}
<script src="{{ asset('js/ripple.js') }}"></script>
<script>
    // just add effect to elements
    Array.prototype.forEach.call(document.querySelectorAll('[data-ripple]'), function (element) {
        // find all elements and attach effect
        new RippleEffect(element); // element is instance of javascript element node
    });
</script>
{{-- ripple --}}

<?php
/*
<div class="-mb-8 md:block" style="height: 190px; background-size: 1440px 190px;"></div>
<div class="bg-wave bg-center bg-repeat-x -mb-8 hidden md:block"
     style="height: 190px; margin-top: -190px; background-size: 1440px 190px;">
</div>
*/
?>
</body>
</html>

