@if(theme_config($pageAos.'.items.'.$itemAos.'.aos.animation') !== 'none')
    @if(theme_config($pageAos.'.items.'.$itemAos.'.aos.animation'))
        data-aos='{{theme_config($pageAos.'.items.'.$itemAos.'.aos.animation')}}'
    @endif
    @if(theme_config($pageAos.'.items.'.$itemAos.'.aos.easing'))
        data-aos-easing='{{theme_config($pageAos.'.items.'.$itemAos.'.aos.easing')}}'
    @endif
    @if(theme_config($pageAos.'.items.'.$itemAos.'.aos.duration') || isset($noDuration))
        data-aos-duration='{{theme_config($pageAos.'.items.'.$itemAos.'.aos.duration')}}'
    @endif
    @if(theme_config($pageAos.'.items.'.$itemAos.'.aos.placement'))
        data-aos-anchor-placement='{{theme_config($pageAos.'.items.'.$itemAos.'.aos.placement')}}'
    @endif
    @if(theme_config($pageAos.'.items.'.$itemAos.'.aos.offset'))
        data-aos-offset='{{theme_config($pageAos.'.items.'.$itemAos.'.aos.offset')}}'
    @endif
@endif
@auth()
    @if(auth()->user()->isAdmin())
        data-config-trigger="{{$pageAos}}-items-{{$itemAos}}"
    @endif
@endauth

