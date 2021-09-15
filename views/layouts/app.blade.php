<!DOCTYPE html>
@include('elements.base')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description', setting('description', ''))">
    <meta name="theme-color" content="#3490DC">
    <meta name="author" content="Azuriom-CMS & Create Theme Linedev.fr">

    <meta property="og:title" content="@yield('title')">
    <meta property="og:type" content="@yield('type', 'website')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ favicon() }}">
    <meta property="og:description" content="@yield('description', setting('description', ''))">
    <meta property="og:site_name" content="{{ site_name() }}">
@stack('meta')

<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ site_name() }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ favicon() }}">
    @auth()
        @if(auth()->user()->role->name == 'Admin')
            @php
                $theme = explode('/',theme_path());
                $theme_lang = trans('theme::lang.config');
            @endphp
            <script>
                window.THEMES = '{{$theme[1]}}';
                window.THEMES_LANG = @php echo json_encode($theme_lang)  @endphp
            </script>
            <script src="{{ theme_asset('js/sweetalert2.all.min.js') }}" defer></script>
        @endif
    @endauth
<!-- Scripts -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}" defer></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}" defer></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('vendor/axios/axios.min.js') }}" defer></script>
    <script src="{{ theme_asset('js/glide.min.js') }}" defer></script>
    <script src="{{ theme_asset('js/aos.js') }}"></script>
    <script src="{{ theme_asset('js/app.js') }}" defer></script>
    <script src="{{ theme_asset('js/particles.js') }}" defer></script>


    <!-- Page level scripts -->
    @stack('scripts')

<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome/css/all.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ theme_asset('css/glide.core.min.css') }}" rel="stylesheet">
    <link href="{{ theme_asset('css/aos.css') }}" rel="stylesheet">
    @include('layouts.root')
    <link href="{{ theme_asset('css/styles.css') }}" rel="stylesheet">
    @auth()
        @if(auth()->user()->role->name == 'Admin')
            <link href="{{ theme_asset('css/admin.css') }}" rel="stylesheet">
            <link href="{{ theme_asset('css/sweetalert2.min.css') }}" rel="stylesheet">
        @endif
    @endauth

    @stack('styles')
</head>

<body id="app">
<header class="header">
    @include('elements.navbar')
</header>
<main>
    @if(url()->route('home') != url()->current())
        @include('elements.background-top')
    @endif
    <div class="container">
        @include('elements.session-alerts')
    </div>
    @yield('content')
</main>
<footer class="footer">
    <div class="footer--top">
        <div class="container-fluid">
            <div class="row justify-content-around">
                <div class="col-xl-3 mt-3 d-flex align-items-center justify-content-center">
                    <img class="footer--logo" src="{{ site_logo() }}" alt="{{ route('home') }}">
                </div>
                <div class="col-xl-4 col-md-6 mt-3">
                    <div class="footer--propos">
                        <h3>À propos de nous</h3>
                        <p>{{ config('theme.footer.description') }}</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mt-3">
                    <div class="footer--liens">
                        <h3>Liens</h3>
                        <ul class="navbar-nav">
                            @php
                                $navbars = \Azuriom\Models\NavbarElement::all()
                            @endphp
                            @foreach($navbars as $element)
                                @if($element->name != 'logo')
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ $element->value }}"
                                           id="navbarDropdown{{ $element->id }}">
                                            {{ $element->name }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                        @if(config('theme.footer.download'))
                            <div class="btn-wrapper-footer d-flex align-items-center justify-content-center">
                                <a class="btn btn-download" href="/{{config('theme.download_link')}}"
                                   title="{{ trans('theme::lang.config.download.name')}}">
                                    {{ trans('theme::lang.config.download.name')}}
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            @if(config('theme.footer.links'))
                <div class="container footer--links mt-3">
                    <div class="row">
                        <div class="col-md-12 justify-content-center align-items-center d-flex">
                            @foreach(config('theme.footer.links') ?? [] as $link )
                                <div class="footer--links-item">
                                    <a target="_blank" href="{{$link['value']}}" title="{{ $link['name'] }}">
                                        {!! $link['icon'] !!}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div class="container-fluid px-0 footer--bottom">
        <div class="row no-gutters">
            <div class="col-md-12">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="footer--copyright">
                                <div class="container">
                                    {{ setting('copyright') }} | @lang('messages.copyright') | Thème réalisé par
                                    <a href="https://discord.gg/kdQ2Mn2Kcv" target="_blank"
                                       rel="noopener noreferrer">Linedev</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mt-md-0 mt-3 text-md-right text-center footer--legal">
                            @if(config('theme.footer.cgu'))
                                <a href="/{{config('theme.footer.cgu')}}"
                                   title="{{ trans('theme::lang.config.cgu.name')}}" target="_blank">
                                    {{ trans('theme::lang.config.cgu.abbreviation')}}
                                </a>
                            @endif
                            @if(config('theme.footer.cgv'))
                                -
                                <a href="/{{config('theme.footer.cgv')}}" target="_blank"
                                   title="{{ trans('theme::lang.config.cgv.name')}}">
                                    {{ trans('theme::lang.config.cgv.abbreviation')}}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
@auth()
    @if(auth()->user()->role->name == 'Admin')
        <script defer>
            window.addEventListener("DOMContentLoaded", (event) => {
                if ($('.btn-picto-color').length > 0) {
                    $('.btn-picto-color').on('click', function () {
                        $(this).toggleClass('active')
                        $('#change--color').toggleClass('active')
                        $('.box--alert').removeClass('active')
                    })
                    $('#change--color #close').on('click', function () {
                        $('.btn-picto-color').toggleClass('active')
                        $('#change--color').toggleClass('active')
                        $('.box--alert').removeClass('active')
                    })
                    $('#setting-alert').on('click', function () {
                        $('.box--alert').toggleClass('active')
                    })
                }
            })
        </script>
        <script src="{{ theme_asset('js/chroma.min.js') }}" defer></script>
        <script src="{{ theme_asset('js/clipboard.min.js') }}" defer></script>
        <script src="{{ theme_asset('js/change-color.js') }}" defer></script>
        @include('layouts.change-color')

    @endif
@endauth
@stack('footer-scripts')
@if(preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false))
    <div id="outdated">
        <span><span><i class="fas fa-ghost"></i></span></span>
        <h6>Error: Your browser is out-of-date!</h6>
        <p>Update your browser to view this website correctly.</p>
        <a id="btnUpdateBrowser" href="https://bestvpn.org/outdatedbrowser/"> Outdated Browser </a>
    </div>
@endif
</body>
</html>
