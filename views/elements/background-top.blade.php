@if(setting('background'))
    <div class="background--top">
        <img src="{{ image_url(setting('background')) }}" alt="">
    </div>
@else
    <div class="separator--top"></div>
@endif
