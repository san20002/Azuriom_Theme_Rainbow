@if(setting('background') and url()->route('home') != url()->current() )
    <div class="background--top">
        <img src="{{ image_url(setting('background')) }}" alt="">
    </div>
@else
    <div class="separator--top"></div>
@endif
