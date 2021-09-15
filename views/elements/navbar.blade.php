<nav class="navbar navbar-expand-xl navbar-light">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{site_logo() }}"
             alt="{{ site_name() }}" title="{{ site_name() }}">
        <h1 class="sr-only">{{ trans('messages.welcome', ['name' => site_name()]) }}</h1>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"
            aria-expanded="false" aria-label="{{ trans('messages.nav.toggle') }}">
        <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mx-auto">
            @foreach($navbar as $element)
                @if(!$element->isDropdown())
                    <li class="nav-item @if($element->isCurrent()) active @endif">
                        <a class="nav-link" href="{{ $element->getLink() }}" @if($element->new_tab) target="_blank"
                           rel="noopener noreferrer" @endif>
                            @if(!config('theme.header.icons'))
                                @foreach(config('theme.header.iconmenus') ?? [] as $icon )
                                    @if($element->name === $icon['name'])
                                        <img src="{{ !empty($icon['url']) ? image_url($icon['url']) :''}}"
                                             alt="{{ $element->name }}" title="{{ $element->name }}">
                                    @endif
                                @endforeach
                            @endif
                            @if(!config('theme.header.text.hidden'))
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
                            @if(!config('theme.header.icons'))
                                @foreach(config('theme.header.iconmenus') ?? [] as $icon )
                                    @if($element->name === $icon['name'])
                                        <img src="{{ !empty($icon['url']) ? image_url($icon['url']) :''}}"
                                             alt="{{ $element->name }}" title="{{ $element->name }}">
                                    @endif
                                @endforeach
                            @endif
                            @if(!config('theme.header.text.hidden'))
                                {{ $element->name }}
                            @endif
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown{{ $element->id }}">
                            @foreach($element->elements as $childElement)
                                <a class="dropdown-item @if($childElement->isCurrent()) active @endif"
                                   href="{{ $childElement->getLink() }}" @if($childElement->new_tab) target="_blank"
                                   rel="noopener noreferrer" @endif>{{ $childElement->name }}</a>
                            @endforeach
                        </div>
                    </li>
                @endif
            @endforeach
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">

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
            @else
                @include('elements.notifications')

                <li class="nav-item dropdown">
                    <a id="userDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        @if(config('theme.header.icons'))
                            <img src="{{theme_asset('image/hints/character.png')}}"
                                 alt="{{ Auth::user()->name }}" title="{{ Auth::user()->name}}">
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
