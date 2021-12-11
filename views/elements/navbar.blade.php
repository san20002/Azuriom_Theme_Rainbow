<nav class="navbar navbar-expand-xl navbar-light
         {{theme_config('header.navbar.style') == 2 ? 'flex-row-reverse' : ''}}">
    @if(!theme_config('header.logo.hidden'))
        <a class="navbar-brand" href="{{ route('home') }}" title="{{ site_name() }}" aria-labelledby="{{site_name()}}">
            <img src="{{site_logo() }}"
                 alt="{{ site_name() }}">
            <h1 class="sr-only">{{ trans('messages.welcome', ['name' => site_name()]) }}</h1>
        </a>
    @else
        <h1 class="sr-only">{{ trans('messages.welcome', ['name' => site_name()]) }}</h1>
    @endif
    <button class="navbar-toggler x collapsed" type="button" data-toggle="collapse" data-target="#navbar-collapse-x"
            aria-controls="navbar"
            aria-expanded="false" aria-label="{{ trans('messages.nav.toggle') }}">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <div
        class="navbar-collapse collapsed d-xl-block d-flex flex-column-reverse justify-content-end align-items-start
         {{theme_config('header.navbar.style') == 2 ? 'flex-xl-row-reverse' : 'flex-xl-row'}}"
        id="navbar-collapse-x">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav navbar-menu
         {{theme_config('header.navbar.position') == 'center' || !theme_config('header.navbar.position') ? 'mx-xl-auto' : ''}}
        {{theme_config('header.navbar.position') == 'left'? 'ml-xl-0 mr-xl-auto  ' : ''}}
        {{theme_config('header.navbar.position') == 'right'? 'ml-xl-auto mr-xl-0  ' : ''}}
            ml-0">
            @foreach($navbar as $element)
                @if(!$element->isDropdown())
                    <li class="nav-item @if($element->isCurrent()) active @endif">
                        <a class="nav-link" href="{{ $element->getLink() }}" @if($element->new_tab) target="_blank"
                           rel="noopener noreferrer" @endif>
                            @if(!theme_config('header.icons'))
                                @foreach(theme_config('header.iconmenus') ?? [] as $icon )
                                    @if($element->value.'-'.$element->type.'-'.$element->id === $icon['name'])
                                        <img src="{{ !empty($icon['url']) ? image_url($icon['url']) :''}}"
                                             alt="{{ $element->name }}" title="{{ $element->name }}">
                                    @endif
                                @endforeach
                            @endif
                            @if(!theme_config('header.text.hidden'))
                                <span>
                                    {{ $element->name }}
                                </span>
                            @endif
                        </a>
                    </li>
                @else
                    <li class="nav-item dropdown @if($element->isCurrent()) active @endif">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown{{ $element->id }}"
                           role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if(!theme_config('header.icons'))
                                @foreach(theme_config('header.iconmenus') ?? [] as $icon )
                                    @if($element->value.'-'.$element->type.'-'.$element->id === $icon['name'])
                                        <img src="{{ !empty($icon['url']) ? image_url($icon['url']) :''}}"
                                             alt="{{ $element->name }}" title="{{ $element->name }}">
                                    @endif
                                @endforeach
                            @endif
                            @if(!theme_config('header.text.hidden'))
                                {{ $element->name }}
                            @endif
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown{{ $element->id }}">
                            @foreach($element->elements as $childElement)
                                <a class="dropdown-item @if($childElement->isCurrent()) active @endif"
                                   href="{{ $childElement->getLink() }}" @if($childElement->new_tab) target="_blank"
                                   rel="noopener noreferrer" @endif>
                                    @if(!theme_config('header.icons'))
                                        @foreach(theme_config('header.iconmenus') ?? [] as $icon )
                                            @if($childElement->value.'-'.$childElement->type.'-'.$childElement->id === $icon['name'])
                                                <img src="{{ !empty($icon['url']) ? image_url($icon['url']) :''}}"
                                                     alt="{{ $childElement->name }}" title="{{ $childElement->name }}">
                                            @endif
                                        @endforeach
                                    @endif
                                    {{ $childElement->name }}
                                </a>
                            @endforeach
                        </div>
                    </li>
                @endif
            @endforeach
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav navbar-user flex-row">

            <!-- Authentication Links -->
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ trans('auth.login') }}</a>
                </li>

                @if(Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ trans('auth.register') }}</a>
                    </li>
                @endif
                @if(plugins()->isEnabled('discord-auth'))
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('discord-auth.login') }}"
                               title="{{ trans('discord-auth::messages.login_via_discord') }}"
                               aria-labelledby="{{ trans('discord-auth::messages.login_via_discord') }}"><i
                                    class="fab fa-discord"></i></a>
                        </li>
                    @endguest
                @endif
            @else
                @include('elements.notifications')

                <li class="nav-item dropdown dropdown-user">
                    <a id="userDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false" v-pre>
                        @if(game()->name() === 'Minecraft')
                            <img src="{{ Auth::user()->getAvatar(32) }}" class="rounded img-fluid"
                                 alt="{{ Auth::user()->name }}">
                        @endif
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{ route('profile.index') }}">
                            {{ trans('messages.nav.profile') }}
                        </a>

                        @foreach(plugins()->getUserNavItems() ?? [] as $navId => $navItem)
                            <a class="dropdown-item" href="{{ route($navItem['route']) }}">
                                {{ trans($navItem['name']) }}
                            </a>
                        @endforeach

                        @if(Auth::user()->hasAdminAccess())
                            <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                {{ trans('messages.nav.admin') }}
                            </a>
                        @endif

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ trans('auth.logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>
