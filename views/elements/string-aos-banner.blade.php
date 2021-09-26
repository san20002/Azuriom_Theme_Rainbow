@if(theme_config($bannerAos.'.banner.'.$value.'.aos.animation') !== 'none')
    @if(theme_config($bannerAos.'.banner.'.$value.'.aos.animation'))
        data-aos='{{theme_config($bannerAos.'.banner.'.$value.'.aos.animation')}}'
    @endif
    @if(theme_config($bannerAos.'.banner.'.$value.'.aos.easing'))
        data-aos-easing='{{theme_config($bannerAos.'.banner.'.$value.'.aos.easing')}}'
    @endif
    @if(theme_config($bannerAos.'.banner.'.$value.'.aos.duration'))
        data-aos-duration='{{theme_config($bannerAos.'.banner.'.$value.'.aos.duration')}}'
    @endif
    @if(theme_config($bannerAos.'.banner.'.$value.'.aos.placement'))
        data-aos-anchor-placement='{{theme_config($bannerAos.'.banner.'.$value.'.aos.placement')}}'
    @endif
    @if(theme_config($bannerAos.'.banner.'.$value.'.aos.offset'))
        data-aos-offset='{{theme_config($bannerAos.'.banner.'.$value.'.aos.offset')}}'
    @endif
@endif
