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
        @if(auth()->user()->isAdmin() || Auth::user()->hasPermission("admin.themes"))
            @php
                $theme = themes()->currentTheme();
                $theme_lang = trans('theme::lang');
            @endphp
            <script>
                window.THEMES = '{{$theme}}';
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
    <script src="{{ asset('js/script.js') }}" defer></script>
    <script src="{{ asset('vendor/clipboard/clipboard.min.js') }}" defer></script>
    <script src="{{ theme_asset('js/glide.min.js') }}" defer></script>
    <script src="{{ theme_asset('js/aos.js') }}"></script>
    <script src="{{ theme_asset('js/app.js') }}" defer></script>
    @if(!theme_config('home.particle.hidden'))
        <script src="{{ theme_asset('js/js-particles.js') }}" defer></script>
    @endif
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
    <link href="{{ theme_asset('css/style-'.(theme_config('header.style') ?? '1').'.css') }}" rel="stylesheet">
    @auth()
        @if(auth()->user()->isAdmin() || Auth::user()->hasPermission("admin.themes"))
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
    @includeIf('elements.particles-js', ['content' => 'full'])
    @if(url()->route('home') != url()->current())
        @include('elements.background-top')
    @endif
    <div class="container container--rainbow">
        @include('elements.session-alerts')
    </div>
    <div class="container--rainbow js-particles-trigger position-relative">
        @includeIf('elements.particles-js', ['content' => 'main'])
        @yield('content')
    </div>
</main>
<footer class="footer">
    @if(theme_config('footer.logo.hidden') !== 'on' || theme_config('footer.liens.hidden') !== 'on' || theme_config('footer.download.hidden') !== 'on' || isset(theme_config('footer.social.links')[0]))
        <div class="footer--top">
            <div class="container-fluid">
                <div class="row justify-content-around">
                    @if(!theme_config('footer.logo.hidden'))
                        <div class="col-xl-3 mt-3 d-flex align-items-center justify-content-center">
                            <img class="footer--logo" src="{{ site_logo() }}"
                                 alt="{{ route('home') }}" {{theme_config('footer.logo.opacity') ? 'style=opacity:'.theme_config('footer.logo.opacity'): ''}}>
                        </div>
                    @endif

                    @if(theme_config('footer.title') || theme_config('footer.description'))
                        <div class="col-xl-4 col-md-6 mt-3">
                            <div class="footer--propos">
                                <h3>{{theme_config('footer.title')}}</h3>
                                <p>{{ theme_config('footer.description') }}</p>
                            </div>
                        </div>
                    @endif
                    <div class="col-xl-3 col-md-6 mt-3">
                        @if(!theme_config('footer.liens.hidden'))
                            <div class="footer--liens">
                                <h3>{{ theme_config('footer.liens.title') }}</h3>
                                <ul class="navbar-nav">
                                    @foreach(theme_config('footer.liens.links') ?? [] as $link )
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ $link['url'] }}" title="{{$link['name']}}">
                                                {{ $link['name'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(!empty(theme_config('footer.download.link.url')) && !theme_config('footer.download.hidden'))
                            <div class="btn-wrapper-footer d-flex align-items-center justify-content-center">
                                <a class="btn btn-download" href="/{{theme_config('footer.download.link.url')}}"
                                   title="{{theme_config('footer.download.link.name')}}">
                                    {{theme_config('footer.download.link.name')}}
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
                @if(theme_config('footer.social.links') && isset(theme_config('footer.social.links')[0]))
                    <div class="container footer--links mt-3">
                        <div class="row">
                            <div class="col-md-12 justify-content-center align-items-center d-flex">
                                @foreach(theme_config('footer.social.links') ?? [] as $link )
                                    <div class="footer--links-item">
                                        <a target="_blank" href="{{$link['url']}}" title="{{ $link['name'] }}">
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
    @endif
    <div class="container-fluid px-0 footer--bottom">
        <div class="row no-gutters">
            <div class="col-md-12">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="footer--copyright">
                                <div class="container">
                                    {{ setting('copyright') }} | @lang('messages.copyright') | <a href="https://market.azuriom.com/resources/71" target="_blank" title="Version V1.1.4">Thème</a> réalisé par
                                    <a href="https://discord.gg/wmYrG2c" target="_blank"
                                       rel="noopener noreferrer">Linedev</a>
                                </div>
                            </div>
                        </div>
                        @if(theme_config('footer.conditions.links') && isset(theme_config('footer.conditions.links')[0]))
                            <div class="col-md-2 mt-md-0 mt-3 text-md-right text-center footer--legal">
                                @foreach(theme_config('footer.conditions.links') ?? [] as $link )
                                    <a href="/{{$link['url']}}" target="_blank"
                                       title="{{$link['name']}}">
                                        {{$link['name']}}
                                    </a>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
@if(!theme_config('header.preloader.hidden'))
    <div id="preloader">
        <img src="{{ site_logo() }}" alt="{{ route('home') }}">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
@endif
@auth()
    @if(auth()->user()->isAdmin() || Auth::user()->hasPermission("admin.themes"))
        @include('layouts.change-color')
        <script defer>
            window.addEventListener("DOMContentLoaded", (event) => {
                if ($('.btn-picto-color').length > 0) {
                    $('.js-change-color').removeClass('d-none')
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

    @endif
@endauth

<script defer>
    window.addEventListener("DOMContentLoaded", (event) => {
        window.particleJs = {}
        let particleJs = window.particleJs;
        particleJs.style = '@php echo theme_config('home.particle.style') ?? 'default' @endphp';
        particleJs.config = @php echo json_encode(theme_config('home.particle.config'))  @endphp;
        particleJs.pathImage = '@php echo image_url()  @endphp/';

        // COMPTEUR DISCORD
        var discord_key = "{{theme_config('home.items.discord.id')}}";
        if ($('.rainbow--js-discordCount').length && discord_key.length) {
            // Si erreur
            window.onerror = function (msg, url, ln) {
                return (msg === "Impossible de trouver la classe du compteur discord.");
            };

            // Affiche du compte
            $.get('https://discordapp.com/api/guilds/' + discord_key + '/embed.json', function (d) {
                $('.rainbow--js-discordCount').html(d.presence_count + " en ligne");
            });
        }

        // WIDGET DISCORD
        if ($('.rainbow-js--discordCount').length && discord_key.length) {
            window.onerror = function (msg, url, ln) {
                return (msg === "Impossible de trouver la classe.");
            };
            $.get('https://discordapp.com/api/guilds/' + discord_key + '/embed.json', function (d) {
                $('.rainbow-js--discordCount').html(d.presence_count + " en ligne");
                d.members.forEach(function (mem) {
                    $('.rainbow-widget[data-widget="rainbow_discord_widget"] .rainbow-content .rainbow-usersDiscord').append(`
                        <div class="rainbow-discordUser">
                            <div class="rainbow-userImg" style="background-image:url(${mem.avatar_url})">
                                <div class="rainbow-userStatus rainbow-status-${mem.status}"></div>
                            </div>
                            <div class="rainbow-username">${mem.username}</div>
                        </div>`);
                });
            });
        }
    })
</script>
@stack('footer-scripts')
@if(preg_match('~MSIE|Internet Explorer~i', request()->userAgent()) || (strpos(request()->userAgent(), 'Trident/7.0; rv:11.0') !== false))
    <div id="outdated">
        <span><span><i class="fas fa-ghost"></i></span></span>
        <h6>Error: Your browser is out-of-date!</h6>
        <p>Update your browser to view this website correctly.</p>
        <a id="btnUpdateBrowser" href="https://www.mozilla.org/fr/firefox/new/"> Outdated Browser </a>
    </div>
@endif
</body>
</html>
