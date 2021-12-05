@if(!theme_config('home.particle.hidden'))
    @if(theme_config('home.particle.content') != NULL && $content === theme_config('home.particle.content'))
        {{theme_config('home.particle.content')}}
        <div id="particles-js" class="particule-{{theme_config('home.particle.content')}}
            {{url()->route('home') === url()->current()? 'page-home':''}}
            "
        ></div>
    @endif
@endif
