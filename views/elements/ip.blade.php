<div id="serveur--ip">
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-lg-4 col-md-6 mb-3">
                @if(!theme_config('home.items.ip-server.hidden'))
                    <div class="countConnectServer justify-content-center justify-content-md-end" id="server-ip-copy"
                         @include('elements.string-aos', ['pageAos' => 'home', 'itemAos'=>'ip-server'])
                         data-clipboard-text="{{theme_config('home.items.ip-server.ip')}}">
                        @if(theme_config('home.items.ip-server.media'))
                            <img src="{{ image_url(theme_config('home.items.ip-server.media')) }}"
                                 alt="{{theme_config('home.items.ip-server.ip')}}">
                        @endif
                        <div class="text mx-auto">
                            @if($server && $server->isOnline())
                                {{ trans_choice('messages.server.online', $server->getOnlinePlayers()) }}
                            @else
                                {{ trans('messages.server.offline') }}
                            @endif
                            <h2 class="copy">{{theme_config('home.items.ip-server.ip')}}</h2>
                        </div>
                        <div class="icon">
                            @if($server && $server->isOnline())
                                <i class="fas fa-signal" aria-hidden="true"></i>
                            @else
                                <i class="fas fa-times"></i>
                            @endif
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-lg-4 col-md-7 d-lg-block d-none">
                @if(!theme_config('home.items.download.hidden') && !is_null(theme_config('home.items.download.url')))
                    <div @include('elements.string-aos', ['pageAos' => 'home', 'itemAos'=>'download'])>
                        <div class="btn-wrapper-home d-sm-block d-none">
                            <a class="btn btn-download" href="/{{theme_config('home.items.download.url')}}"
                               title="{{theme_config('home.items.download.name')}}">
                                {{theme_config('home.items.download.name')}}
                            </a>
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-lg-4 col-md-6 mb-3{{!theme_config('home.download.hidden') ? 'offset-lg-4' :''}}">
                @if(!theme_config('home.items.count-register.hidden'))
                    <div class="countRegister justify-content-center justify-content-md-start"
                        @include('elements.string-aos', ['pageAos' => 'home', 'itemAos'=>'count-register'])>
                        @if(theme_config('home.items.count-register.media'))
                            <img src="{{ image_url(theme_config('home.items.count-register.media')) }}"
                                 alt="{{trans('theme::lang.site.register')}}">
                        @else
                            <div class="icon">
                                <i class="fas fa-users" aria-hidden="true"></i>
                            </div>
                        @endif
                        <div class="text mx-auto">
                            <p>
                                <em class="">{{\Azuriom\Models\User::whereNull('deleted_at')->count()}}</em> {{trans('theme::lang.site.register')}}
                            </p>
                            <h2>{{trans('theme::lang.site.memberRegister')}}</h2>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
