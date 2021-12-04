@if(!theme_config('home.particle.hidden'))
    {{--    {{dump($content)}}--}}
    @if($content === theme_config('home.particle.content'))
        <div id="particles-js" {{theme_config('home.particle.fullScreen') ? 'class=particule-full': ''}}></div>
    @else
        @if($content === 'header')
            <div id="particles-js"></div>
        @endif
    @endif
@endif
