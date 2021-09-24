@if(theme_config($bannerAos.'.banner.'.$valueAos.'.aos.animation') !== 'none')
    @if(theme_config($bannerAos.'.banner.'.$valueAos.'.aos.animation'))
        data-aos='{{theme_config($bannerAos.'.banner.'.$valueAos.'.aos.animation')}}'
    @endif
    @if(theme_config($bannerAos.'.banner.'.$valueAos.'.aos.easing'))
        data-aos-easing='{{theme_config($bannerAos.'.banner.'.$valueAos.'.aos.easing')}}'
    @endif
    @if(theme_config($bannerAos.'.banner.'.$valueAos.'.aos.duration'))
        data-aos-duration='{{theme_config($bannerAos.'.banner.'.$valueAos.'.aos.duration')}}'
    @endif
    @if(theme_config($bannerAos.'.banner.'.$valueAos.'.aos.placement'))
        data-aos-anchor-placement='{{theme_config($bannerAos.'.banner.'.$valueAos.'.aos.placement')}}'
    @endif
    @if(theme_config($bannerAos.'.banner.'.$valueAos.'.aos.offset'))
        data-aos-offset='{{theme_config($bannerAos.'.banner.'.$valueAos.'.aos.offset')}}'
    @endif
@endif
