<div class="background--top">
    @if(setting('background'))
        <img class="img-background" src="{{ image_url(setting('background')) }}" alt="background">
    @endif

        @includeIf('elements.particles-js', ['content' => 'header'])

    <div class="server--ip-top">
        @include('elements.ip')
    </div>
</div>

