@if(setting('background'))
    <div class="background--top">
        <img src="{{ image_url(setting('background')) }}" alt="">

        @if(!config('theme.home.particle.hidden'))
            <div id="particles-js"></div>
        @endif
    </div>
@else
    <div class="separator--top"></div>
@endif
