<div class="background--top">
    @if(setting('background'))
        <img src="{{ image_url(setting('background')) }}" alt="">
    @endif

    @if(!theme_config('home.particle.hidden'))
        <div id="particles-js"></div>
    @endif
    <div class="server--ip-top">
        @include('elements.ip')
    </div>
</div>

