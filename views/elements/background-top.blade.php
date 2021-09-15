@if(setting('background'))
    <div class="background--top">
        <img src="{{ image_url(setting('background')) }}" alt="">
        <div id="particles-js"></div>
    </div>
@else
    <div class="separator--top"></div>
@endif
