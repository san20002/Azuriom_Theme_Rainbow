<div id="serveur--ip">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="countConnectServer justify-content-center justify-content-md-end" id="server-ip-copy"
                     data-clipboard-text="{{theme_config('header.server.ip')}}">
                    <div class="text">
                        @if($server && $server->isOnline())
                            {{ trans_choice('messages.server.online', $server->getOnlinePlayers()) }}
                            <p>Il y a {{$server->getOnlinePlayers()}} connectés sur {{$server->getMaxPlayers()}}.</p>
                        @else
                            {{ trans('messages.server.offline') }}
                        @endif
                        <h2 class="copy">{{theme_config('header.server.ip')}}</h2>
                    </div>
                    <div class="icon">
                        @if($server && $server->isOnline())
                            <i class="fas fa-signal" aria-hidden="true"></i>
                        @else
                            <i class="fas fa-times"></i>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-7 d-lg-block d-none">
                @if(!theme_config('home.download.hidden') && !is_null(theme_config('home.download.link.url')))
                    <div class="btn-wrapper-home d-sm-block d-none">
                        <a class="btn btn-download" href="/{{theme_config('home.download.link.url')}}"
                           title="{{theme_config('home.download.link.name')}}">
                            {{theme_config('home.download.link.name')}}
                        </a>
                    </div>
                @endif
            </div>
            <div class="col-lg-4 col-md-6 mb-3{{!theme_config('home.download.hidden') ? 'offset-lg-4' :''}}">
                <div class="countRegister justify-content-center justify-content-md-start">
                    <div class="icon">
                        <i class="fas fa-users" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <p>
                            <em class="">{{count(\Azuriom\Models\User::all())}}</em> {{trans('theme::lang.site.register')}}
                        </p>
                        <h2>{{trans('theme::lang.site.memberRegister')}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>