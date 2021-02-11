@if(setting('background') and url()->route('home') != url()->current() )
    <div class="background--top">
        <img src="{{ image_url(setting('background')) }}" alt="">
    </div>
@elseif(url()->route('home') == url()->current())
@else
    <div class="separator--top"></div>
@endif
