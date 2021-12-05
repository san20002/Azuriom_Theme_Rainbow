@if(!theme_config('home.particle.hidden'))
    @if($content === theme_config('home.particle.content'))
        {{theme_config('home.particle.content')}}
        <div id="particles-js" class="particule-{{theme_config('home.particle.content')}}
        {{url()->route('home') === url()->current()? 'page-home':''}}
            "
        ></div>
    @endif
    @if(theme_config('home.particle.content') == NULL && $content === 'header')
        <div id="particles-js" class="particule-null"></div>
    @endif
@endif
