@if(setting('background'))
    <div class="background--top">
        <img src="{{ image_url(setting('background')) }}" alt="">

        @if(!theme_config('home.particle.hidden'))
            <div id="particles-js"></div>
        @endif
        <div class="server--ip-top">
            @include('elements.ip')
        </div>
    </div>
@else
    <div class="separator--top position-relative">
        @if(!theme_config('home.particle.hidden'))
            <div id="particles-js"></div>
        @endif
    </div>
    <div class="server--ip-top">
        @include('elements.ip')
    </div>
@endif

