<div class="background--top">
    @if(setting('background'))
        <img src="{{ image_url(setting('background')) }}" alt="">
    @endif

        @includeIf('elements.particles-js', ['content' => 'header'])

    <div class="server--ip-top">
        @include('elements.ip')
    </div>
</div>

